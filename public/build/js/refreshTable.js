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
        if(checked_ids!=null){
            checked_ids = checked_ids.join(',');
            $.post('mysql/exportTable.php',{checked_ids: checked_ids}, function(data){
                processJSON(data);
            });
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
   */
}

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