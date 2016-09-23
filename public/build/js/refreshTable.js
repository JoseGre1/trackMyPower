$(document).ready(function()
{
    press_select_all = false;
    press_deselect_all = false;
    $('.checkbox').on('ifToggled', function(event){
        if (!($("input.flat:checked").length == $("input.flat:checkbox").length) && press_select_all){
            return;
        }
        if (!($("input.flat:checked").length == 0) && press_deselect_all){
            return;
        }
        checked_ids = [];
        column_header = [];
        $("input.flat:checkbox").each(function(i){
            var val = $(this).is(':checked');
            if(val){
                checked_ids.push($(this).attr("id"));
            } 
        });
        if(checked_ids.length!=0){
            /*
            if (typeof picker === 'undefined'){
                startdate = moment().subtract(1, 'month').format('YYYY-MM-DD H:mm');
                enddate = moment().format('YYYY-MM-DD H:mm');
            }
            else{
                startdate = picker_obj.startDate.format('YYYY-MM-DD H:mm');
                enddate = picker_obj.endDate.format('YYYY-MM-DD H:mm');
            }
            */
            $.post('mysql/exportTable.php', function(phpdata){
                processJSON(phpdata);
            });
        }
        else
        {
            var wrapper_element = document.getElementById('datatable_wrapper');
            if (wrapper_element !== null){
                $("#datatable_wrapper").css("opacity",0);
                $("div#datatable_wrapper").remove();
                myTable.destroy();
            }
            if (press_deselect_all){
                press_deselect_all = false;
            }
        }
    });

});

function processJSON(phpdata){
    eval(phpdata);
    array_object = JSON2Array(checked_ids);
    createTable(array_object.headers,array_object.dataSet);
}

var JSON2Array = function (ids_array){
    var position;
    //keys: "headers" of the JSON Object e.g. "id", "date_time", ...
    var JSONkeys = Object.keys(JData[0]); 
    var keys_array= [];
    //Getting positions in "keys" array where the id's are
    //Getting name of the checked keys (title of the columns)
    for (i = 0; i < ids_array.length; i++) {
        position = JSONkeys.indexOf(ids_array[i]);
        keys_array.push(JSONkeys[position]);
    }
    //Getting data set from the JSON Object
    var dataSet = [];
    for(i = 0; i < JData.length; i++){
         var new_row = [];
         for(j = 0; j < keys_array.length; j++){
            new_row.push(JData[i][keys_array[j]]);
         }
         dataSet.push(new_row);
    }
    //Getting the headers --> inputs of DataTable() function
    var headers = [];
    var c_title;
    for (i = 0; i < keys_array.length; i++){
        c_title = $("#"+keys_array[i]).attr("value");
        headers.push({title: c_title});
    }
    return {
        headers: headers,
        dataSet: dataSet
    };
}

function createTable(headers,dataSet){
    $("div#datatable_wrapper").remove();
    var tabledef = '<table id="datatable" class="table table-striped table-bordered bulk_action" style="opacity:0;"> </table>';
    $("div#refreshTable").append(tabledef);
    if (typeof(myTable) !== 'undefined'){
        myTable.destroy();
    }
    //Set dataSet and headers as inputs of DataTable()
    myTable = $("#datatable").DataTable({
        data: dataSet,
        columns: headers,
        dom: "lBfrtip",
              buttons: [
                {
                  extend: "copyHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "csvHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "excelHtml5",
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
    //This comment
    drawTable();
    $("#datatable_wrapper").css("opacity",100);
    $("table#datatable").css("opacity",100);
    press_select_all = false;
    press_deselect_all = false;
}
