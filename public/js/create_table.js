$(document).ready(function()
{
    $(".getJdata").click(function(){
        $.post('mysql/dataFromDB.php', function (data) {
            processJSON(data);
        });
    });
    
    function processJSON(data){
        //loadScripts(["js/dbJsonData.js"],function(){alert('dbJsonData.js loaded successfuly')});
        createTable();
    }

    function loadScripts(array,callback){
    var loader = function(src,handler){
        var script = document.createElement("script");
        script.src = src;
        script.onload = script.onreadystatechange = function(){
        script.onreadystatechange = script.onload = null;
            handler();
        }
        var head = document.getElementsByTagName("head")[0];
        (head || document.body).appendChild( script );
    };
    (function(){
        if(array.length!=0){
            loader(array.shift(),arguments.callee);
        }else{
            callback && callback();
        }
    })();
    }

    function createTable(){

            var strTable; 
            strTable = '';
            strTable += '<table border="2" class="table table-hover tbldata" style="padding:10px">';
            strTable += '<tr>';
            strTable += '<th >Voltage</th>';
            strTable += '<th >Current</th>';
            strTable += '<th >Power</th>';
            strTable += '</tr>';    

            $.each(JData, function(i, field)
            {
                strTable += '<tr>';
                strTable += '<td >'+JData[i]['voltage_med1']+'</td>';
                strTable += '<td >'+JData[i]['curr_med1']+'</td>';
                strTable += '<td >'+JData[i]['power_med1']+'</td>';     
                strTable += '</tr>'; 

            });
          
            strTable += '</table>';        

           $("div#charts").html(strTable);
    }
});