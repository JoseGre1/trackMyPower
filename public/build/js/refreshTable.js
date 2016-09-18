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
            if(typeof JData !== 'undefined'){
                $.post('mysql/exportTable.php', function(data){
                    processJSON(data);
                });
            }
            $("#datatable_wrapper").css("opacity",100);
        }
        else
        {
            $("#datatable_wrapper").css("opacity",0);    
        }
    });
});

function processJSON(data){
    eval(data);
    var positions = [];
    //keys: "headers" of the JSON Object e.g. "id", "date_time", ...
    keys = Object.keys(JData[0]); 
    //Getting positions in "keys" array where the checked id's are
    for (i = 0; i < checked_ids.length; i++) {
        positions.push(keys.indexOf(checked_ids[i]));   
    }
    //Getting name of the checked keys (title of the columns)
    var checked_keys = [];
    for (i = 0; i < postions.length; i++){
        checked_keys.push(keys(positions[i]));
    }
    //Getting data set from the JSON Object
    var dataSet = [];
    for(i = 0; i < JData.length; i++){
        var new_row = [];
        for(j = 0; j < positions.length; j++){
            new_row.push(JData[i][keys[positions[j]]]);
        }
        dataSet.push(new_row);
    }
    //Getting the headers --> inputs of DataTable() function
    var headers = [];
    for (i = 0; i < checked_keys.length; i++){
        headers.({title: checked_keys[i]});
    }
    //Set dataSet and headers as inputs of DataTable()
    $('#datatable').DataTable({
        data: dataSet,
        columns: headers
    });
}

/*

function createTable(data){
    
    
    reloadScript(data,"get_JSON_PHP");
    //$("script#get_JSON_PHP").append(data);
    //$("body").append($("#get_JSON_PHP").find("script:first"));
    var strTable; 
    strTable = '';
    strTable += '<table border="2" class="table table-hover tbldata" style="padding:10px">';
    strTable += '<tr>';
    strTable += '<th >ID</th>';
    strTable += '<th >Voltage</th>';
    strTable += '<th >Current</th>';
    strTable += '<th >Power</th>';
    strTable += '</tr>';    

    $.each(JData, function(i, field)
    {
        strTable += '<tr>';
        strTable += '<td >'+(i+1)+'</td>';
        strTable += '<td >'+JData[i]['voltage_med1']+'</td>';
        strTable += '<td >'+JData[i]['curr_med1']+'</td>';
        strTable += '<td >'+JData[i]['power_med1']+'</td>';     
        strTable += '</tr>';
    });
  
    strTable += '</table>';        

   $("div#charts").html(strTable);
   
}
*/

/*
    function reloadScript(data,id_script) {
        // Check for existing script element and delete it if it exists
        var js = document.getElementById(id_script);
        if(js !== null) {
            document.body.removeChild(js);
        }
        // Create new script element and load a script into it
        js = document.createElement("script");
        js.id = id_script;
        var id_script2 = "script#".concat(id_script);
        document.body.appendChild(js);
        $(id_script2).append(data);
    }
    


    
});

*/