//
// print queue ticket
//
function print_queue(link, printer_ip, register_id, number, hn){
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var address = 'http://' + printer_ip + '/cgi-bin/epos/service.cgi?devid=local_printer&timeout=60000';

    var builder = new epson.ePOSBuilder();
    builder.addFeedUnit(10);
    builder.addTextAlign(builder.ALIGN_CENTER);
    builder.brightness = 1.0;
    builder.halftone = builder.HALFTONE_ERROR_DIFFUSION;
    builder.addImage(context, 0, 0, 73, 99, builder.COLOR_1, builder.MODE_MONO);
    builder.addFeedUnit(14);
    builder.addTextLang('en');
    builder.addTextSize(2, 2);
    builder.addTextFont(builder.FONT_B);
    builder.addText('ศูนย์เวชศาสตร์ผู้สูงอายุ\n');
    builder.addFeedUnit(10);
    builder.addTextDouble(true, true);
    builder.addTextSize(1, 1);
    builder.addText('หมายเลขของท่าน\n');
    builder.addFeedUnit(number);
    builder.addTextSize(8, 8);
    builder.addText('10\n');
    builder.addFeedUnit(10);
    builder.addTextSize(1, 1);
    builder.addText('วันที่ 20 เมษายน 2563 เวลา 10:10:10\n');
    builder.addFeedUnit(10);
    builder.addTextSize(3, 3);
    builder.addText('HN: ' + hn + '\n');
    builder.addFeedUnit(10);
    builder.addBarcode('hn', builder.BARCODE_CODE39, builder.HRI_NONE, builder.FONT_A, 3, 70);
    builder.addFeedUnit(10);
    builder.addTextSize(1, 1);
    builder.addText('แสกน QR Code เพื่อดูรายละเอียด');
    builder.addFeedUnit(10);
    builder.addSymbol( link + '?register_id=' + register_id, builder.SYMBOL_QRCODE_MODEL_1, builder.LEVEL_DEFAULT, 7, 0, 0);
    builder.addFeedUnit(30);
    builder.addCut(builder.CUT_FEED);

    var epos = new epson.ePOSPrint(address);
    epos.onreceive = function (res) { alert(res.success); };
    epos.onerror = function (err) { alert(err.status); };
    epos.oncoveropen = function () { alert('coveropen'); };
    epos.send(builder.toString());
}


function printTicket() {

    // open print dialog
    $('#print').dialog('open');

    //
    // build print data
    //

    // create print data builder object
    var builder = new epson.ePOSBuilder();

    // paper layout
    if (layout) {
        builder.addLayout(builder.LAYOUT_RECEIPT, 580);
    }

    // get current date
    var now = new Date();

    // ticket number
    var number = ('0000' + sequence).slice(-4);

    // initialize (ank mode, smoothing)
    builder.addTextLang('en').addTextSmooth(true);

    // draw image (for raster image)
    var canvas = $('#canvas').get(0);
    var context = canvas.getContext('2d');
    context.drawImage($('#logo').get(0), 0, 0, 200, 70);

    // append raster image
    builder.addTextAlign(builder.ALIGN_CENTER);
    builder.addImage(context, 0, 0, 200, 70);
    builder.addFeedLine(1);

    // append ticket number
    builder.addTextAlign(builder.ALIGN_LEFT);
    builder.addTextDouble(true, false).addText('Your Number:');
    builder.addTextDouble(false, false).addText('\n');
    builder.addFeedUnit(16);
    builder.addTextAlign(builder.ALIGN_CENTER);
    builder.addTextSize(6, 4).addText(number);
    builder.addTextSize(1, 1).addText('\n');
    builder.addFeedUnit(16);

    // append message
    builder.addTextStyle(false, false, true);
    builder.addText('Please wait until your ticket\n');
    builder.addText('number is called.\n');
    builder.addTextStyle(false, false, false);
    builder.addFeedUnit(16);

    // append date and time
    builder.addText(now.toDateString() + ' ' + now.toTimeString().slice(0, 8) + '\n');
    builder.addFeedUnit(16);

    // append barcode
    builder.addBarcode(number, builder.BARCODE_CODE39, builder.HRI_BELOW, builder.FONT_A, 2, 48);
    builder.addFeedLine(1);

    // append paper cutting
    builder.addCut();

    //
    // send print data
    //

    // create print object
    var url = 'http://' + ipaddr + '/cgi-bin/epos/service.cgi?devid=' + devid + '&timeout=' + timeout;
    var epos = new epson.ePOSPrint(url);

    // register callback function
    epos.onreceive = function (res) {
        // close print dialog
        $('#print').dialog('close');
        // print failure
        if (!res.success) {
            // show error message
            $('#receive').dialog('open');
        }
    }

    // register callback function
    epos.onerror = function (err) {
	    // close print dialog
        $('#print').dialog('close');
        // show error message
        $('#error').dialog('open');
    }

    // send
    epos.send(builder.toString());

    // set next ticket number
    sequence = sequence % 9999 + 1;
}
