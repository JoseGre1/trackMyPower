$(document).ready(function()
{
    $('.checkbox').on('ifToggled', function(event){
        var val1 = $(this).closest("input").attr('checked', true);
        var val2 = $(".checkbox").is(':checked');
        if(val1){
            alert("This is checked - val1");
        }else{
            alert("This is not checked - val1");
        }
        if(val2){
            alert("This is checked - val2");
        }else{
            alert("This is not checked - val2");
        }
        $("#datatable_wrapper").css("opacity",100);
        //$.post('mysql_original/dataFromDB.php', {n_records: n_records}, function (data) {
        //    processJSON(data);
        //});
        }
    });

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
    
    function processJSON(data){
        createTable(data);
    }

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
});