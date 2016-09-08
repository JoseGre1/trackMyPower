$(document).ready(function()
{
    $(".getJdata").click(function(){
        var n_records = $('input#num_reg').val();
        n_records = parseInt(n_records);
        $.post('mysql/dataFromDB.php', {n_records: n_records}, function (data) {
            processJSON(data);
        });
    });
    
    function processJSON(data){
        createTable();
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