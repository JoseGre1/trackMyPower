function SelectAll() {
    if ( document.getElementById("sel-all-btn").classList.contains('btn-success') ) {
        $('.checkbox').iCheck('check'); 
        document.getElementById("sel-all-btn").classList.remove('btn-success');    
        document.getElementById("sel-all-btn").classList.add('btn-danger');
        toggleTextOfButton("sel-all-btn");
    }else{
        $('.checkbox').iCheck('uncheck'); 
        document.getElementById("sel-all-btn").classList.remove('btn-danger');    
        document.getElementById("sel-all-btn").classList.add('btn-success');
        toggleTextOfButton("sel-all-btn");
    }
    
}

function toggleTextOfButton(button_id)  {
   var text = document.getElementById(button_id).childNodes[0].nodeValue;
   text = text == "Select All" ? "Unselect All" : "Select All";
   document.getElementById(button_id).childNodes[0].nodeValue = text;
}