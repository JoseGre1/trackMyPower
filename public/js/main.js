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
	$("div#phplog").append(data);
	var coord = data.split(" ");
	var voltage_med1 = coord[0];
	var current_med1 = coord[1];
	var power_med1 = coord[2];
	var lat = coord[3];
	var lon = coord[4];
	//Change timestp
	// var timestp = document.getElementById("timestamp");
	// 	var str1 = "Last searched: ";
	// 	timestp.innerHTML = str1.concat(date," ",time);
	//refresh map (if already exists)
	if (typeof map != "undefined") {
		lat = 11.019979;
		lon = -74.851321;
		var myLatlng = new google.maps.LatLng(lat,lon);
		//clearing old markers
		setMapOnAll(null);
		markers = [];
		//new marker
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Current Position"
		});
		markers.push(marker);
		// To add the marker to the map, call setMap();
		marker.setMap(this.map);
	    map.setCenter(marker.getPosition());
	}
}
