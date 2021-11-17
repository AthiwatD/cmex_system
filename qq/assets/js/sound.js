var sound_a = new Audio('sound/a.mp3');
var sound_b = new Audio('sound/b.mp3');
var sound_c = new Audio('sound/c.mp3');
var sound_d = new Audio('sound/d.mp3');
var sound_e = new Audio('sound/e.mp3');
var sound_0 = new Audio('sound/0.mp3');
var sound_1 = new Audio('sound/1.mp3');
var sound_2 = new Audio('sound/2.mp3');
var sound_3 = new Audio('sound/3.mp3');
var sound_4 = new Audio('sound/4.mp3');
var sound_5 = new Audio('sound/5.mp3');
var sound_6 = new Audio('sound/6.mp3');
var sound_7 = new Audio('sound/7.mp3');
var sound_8 = new Audio('sound/8.mp3');
var sound_9 = new Audio('sound/9.mp3');
var sound_10 = new Audio('sound/10.mp3');
var sound_20 = new Audio('sound/20.mp3');
var sound_100 = new Audio('sound/100.mp3');
var sound_at = new Audio('sound/at.mp3');
var sound_channel = new Audio('sound/channel.mp3');
var sound_clock = new Audio('sound/clock.mp3');
var sound_ed = new Audio('sound/ed.mp3');
var sound_ka = new Audio('sound/ka.mp3');
var sound_minit = new Audio('sound/minit.mp3');
var sound_now = new Audio('sound/now.mp3');
var sound_number = new Audio('sound/number.mp3');
var sound_please = new Audio('sound/please.mp3');
var sound_sec = new Audio('sound/sec.mp3');
var sound_service = new Audio('sound/service.mp3');
var sound_silent = new Audio('sound/silent.mp3');
var sound_time = new Audio('sound/time.mp3');

var sound_alert_01 = new Audio('sound/alert_01.wav');
var sound_alert_02 = new Audio('sound/alert_02.mp3');

var audioarray = new Array();
var indx = 0;
var queue = [];
var ss = new Array();
var ss_indx = 0;

    
function call_no(channel_no, queue_type, queue_no){
    //service.currentAudio = new Audio();
    ss[ss_indx] = new Array();
    ss[ss_indx][0] = channel_no;
    ss[ss_indx][1] = queue_no;
    ss[ss_indx][2] = queue_type;
    queue.push(ss[ss_indx]);
    
    if(indx==0){
        //document.getElementById("button_next").disabled = true;
        //alert(queue_no.length);
        audioarray = new Array();
        //array_length = new SoundLength(0);

        //array_length = 0;
        count =0;
        audioarray[count] = sound_silent;
        audioarray[count].muted="muted";
        count++;
        
        audioarray[count] = sound_silent;
        audioarray[count].muted="muted";
        count++;
        audioarray[count] = sound_silent;
        audioarray[count].muted="muted";
        count++;
        audioarray[count] = sound_silent;
        audioarray[count].muted="muted";
        count++;
        
        audioarray[count] = sound_please;
        audioarray[count].muted="muted";
        count++;
        audioarray[count] = sound_number;
        audioarray[count].muted="muted";
        count++;

        //for(var i=0;i<queue_type.length;i++){
            var n = queue_type.substring(queue_type.length-1,queue_type.length);
            n = n.toLowerCase();
            var s = this['sound_'+n];
            audioarray[count] = s;
            audioarray[count].muted="muted";
            count++;
        //}

        for(var i=0;i<=queue_no.length-1;i++){
            var n = queue_no.substring(i,i+1);
            var s = this['sound_'+n];
            audioarray[count] = s;
            audioarray[count].muted="muted";
            count++;
        }
        audioarray[count] = sound_at;
        audioarray[count].muted="muted";
        count++;
        audioarray[count] = sound_channel;
        audioarray[count].muted="muted";
        count++;
        audioarray[count] = sound_service;
        audioarray[count].muted="muted";
        count++;
        for(var i=0;i<=channel_no.length-1;i++){
            var n = channel_no.substring(i,i+1);
            var s = this['sound_'+n];
            audioarray[count] = s;
            audioarray[count].muted="muted";
            count++;
        }
        audioarray[count] = sound_ka;
        audioarray[count].muted="muted";
        //indx = 0;
        playSnd();
        count++;
        
    }
    ss_indx++;
}
function playSnd() {
    indx++;
    //alert(array_length.getLength());
    if (indx === audioarray.length){
        //document.getElementById("button_next").disabled = false;
        indx=0;
        return;
    }
    
    audioarray[indx].addEventListener('ended',playSnd);
    audioarray[indx].muted = false;
    audioarray[indx].play();

    
    
}

function call_notification() {
    count = 0;
    audioarray[count] = sound_silent;
    audioarray[count].muted = "muted";
    count++;

    audioarray[count] = sound_alert_01;
    audioarray[count].muted = "muted";

    playSnd();
    count++;

}


