$(window).load(repeat());

function repeat(){
	getData();
	var newtime = 10000;
   	setTimeout(repeat, newtime);
}

function getData(){
    $.post('mysql/dataFromDB.php', function (data) {
        processData(data);
    });
}

function processData(data){
	if (typeof map != "undefined") {

		var coord = data.split(" ");
		var lat = coord[0];
		var lon = coord[1];
		var date = coord[2];
		var time = coord[3];

		var timestp = document.getElementById("timestamp");
		var str1 = "Last searched: ";
		timestp.innerHTML = str1.concat(date," ",time); 

		var myLatlng = new google.maps.LatLng(lat,lon);

		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Current Position"
		});

		// To add the marker to the map, call setMap();
		marker.setMap(this.map);
	    map.setCenter(marker.getPosition());
	}
}
