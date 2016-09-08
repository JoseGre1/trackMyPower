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

function setMapOnAll(map_v) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map_v);
  }
}

function processData(data){
	var data2;
	data2 = data.replace(",","\t");
	data2 = data.replace(";"," <br> ");
	$("div#phplog").append(data2);

	// var coord = data.split(";");


	// var voltage_med1 = coord[0];
	// var current_med1 = coord[1];
	// var power_med1 = coord[2];
	// var lat = coord[3];
	// var lon = coord[4];
	
	// $("div#voltage_med1_log").append(voltage_med1);
	// $("div#current_med1_log").append(current_med1);
	// $("div#power_med1_log").append(power_med1);
	// $("div#lat_log").append(lat);
	// $("div#lon_log").append(lon);

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
