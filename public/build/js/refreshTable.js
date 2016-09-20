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
        $("input.flat:checkbox").each(function(i){
            var val = $(this).is(':checked');
            if(val){
                checked_ids.push($(this).attr("value"));
            } 
        });
        if(checked_ids.length!=0){
            $('#calendar').on('apply.daterangepicker', function(ev, picker) {
                var startdate = picker.startDate.format('YYYY-MM-DD h:mm');
                var enddate = picker.endDate.format('YYYY-MM-DD h:mm');
            });
            $.post('mysql/exportTable.php', { startdate: startdate, enddate: enddate }, function(phpdata){
                processJSON(phpdata);
            });
        }
        else
        {
            var wrapper_element = document.getElementById('datatable_wrapper');
            if (wrapper_element !== null){
                $("#datatable_wrapper").css("opacity",0);
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
    var positions = [];
    //keys: "headers" of the JSON Object e.g. "id", "date_time", ...
    var JSONkeys = Object.keys(JData[0]); 
    //Getting positions in "keys" array where the id's are
    for (i = 0; i < ids_array.length; i++) {
        positions.push(JSONkeys.indexOf(ids_array[i]));   
    }
    //Getting name of the checked keys (title of the columns)
    var keys_array = [];
    for (i = 0; i < positions.length; i++){
        keys_array.push(keys[positions[i]]);
    }
    //Getting data set from the JSON Object
    var dataSet = [];
    for(i = 0; i < JData.length; i++){
         var new_row = [];
         for(j = 0; j < positions.length; j++){
            new_row.push(JData[i][keys_array[j]]);
         }
         dataSet.push(new_row);
    }
    //Getting the headers --> inputs of DataTable() function
    var headers = [];
    for (i = 0; i < keys_array.length; i++){
        headers.push({title: keys_array[i]});
    }
    return {
        headers: headers,
        dataSet: dataSet
    };
}

function createTable(headers,dataSet){
    if (typeof(myTable) !== 'undefined'){
        myTable.destroy();
        $('#datatable').remove();
        var tabledef = '<table id="datatable" class="table table-striped table-bordered bulk_action" style="opacity:0;"> </table>';
        $("div#refreshTable").append(tabledef);
    }
    //Set dataSet and headers as inputs of DataTable()
    myTable = $('#datatable').DataTable({
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
    $("#datatable_wrapper").css("opacity",100);
    $("#datatable").css("opacity",100);
    press_select_all = false;
    press_deselect_all = false;
}