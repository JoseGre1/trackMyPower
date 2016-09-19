$(document).ready(function()
{
    $('.checkbox').on('ifToggled', function(event){
        checked_ids = [];
        $("input.flat:checkbox").each(function(i){
            var val = $(this).is(':checked');
            if(val){
                checked_ids.push($(this).attr("value"));
            } 
        });
        if(checked_ids.length!=0){
            $.post('mysql/exportTable.php', function(phpdata){
                processJSON(phpdata);
            });
        }
        else
        {
            var wrapper_element = document.getElementById('datatable_wrapper');
            if (wrapper_element !== null){
                $("#datatable_wrapper").css("opacity",0);
            }
        }
    });
});

function processJSON(phpdata){
    eval(phpdata);
    createTable();
}

function createTable (){
    var positions = [];
    //keys: "headers" of the JSON Object e.g. "id", "date_time", ...
    keys = Object.keys(JData[0]); 
    //Getting positions in "keys" array where the checked id's are
    for (i = 0; i < checked_ids.length; i++) {
        positions.push(keys.indexOf(checked_ids[i]));   
    }
    //Getting name of the checked keys (title of the columns)
    var checked_keys = [];
    for (i = 0; i < positions.length; i++){
        checked_keys.push(keys[positions[i]]);
    }
    //Getting data set from the JSON Object
    var dataSet = [];
    for(i = 0; i < JData.length; i++){
         var new_row = [];
         for(j = 0; j < positions.length; j++){
            new_row.push(JData[i][checked_keys[j]]);
         }
         dataSet.push(new_row);
    }
    //Getting the headers --> inputs of DataTable() function
    var headers = [];
    for (i = 0; i < checked_keys.length; i++){
        headers.push({title: checked_keys[i]});
    }
    if (typeof(myTable) !== 'undefined'){
        myTable.destroy();
    }
    //Set dataSet and headers as inputs of DataTable()
    myTable = $('#datatable').DataTable({
        data: dataSet,
        columns: headers,
        dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
        keys: true,
        responsive: true,
        fixedHeader: true
    });
    $("#datatable_wrapper").css("opacity",100);
}