$(document).ready(function()
{
    $("#SendData").click(function(){
		alert("The thing was pushed");
		$.post('dataToDB.php?user=mpardo&pssd=pardo1234&voltage=120&current=0.9&energy=0&power=50&latitude=1&longitude=1&date_time=2016-04-01%2012:12:12&temperature=30&humidity=90', function (data) {            
            $("div#phplog").append(data);
        });
        alert("Already posted");
    });
});