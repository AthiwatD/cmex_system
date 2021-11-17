function copy_to_clipboard(id, id_popup, id_target, val) {
    alert(val);
    document.getElementById(id_target).value = val;
/*
    var range = document.createRange();
        range.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect
        $("#" + id_popup).html("Copy Successful");
        $("#" + id_popup).fadeIn(500, function(){
            $("#" + id_popup).fadeOut(500);
        });
*/
        
        //paste_from_clipboard(id_target);
}

// function paste_from_clipboard(id_target){
//     document.getElementById(id_target).focus();
//     document.execCommand("paste");
// }

async function paste_from_clipboard(id_target) {
    const text = await navigator.clipboard.readText();
    document.getElementById(id_target).value = text;
  }