$(window).load(repeat());

function repeat(){
	getData();
	var newtime = 10000;
   	setTimeout(repeat, newtime);
}

function getData(){
	var n_records = 10;
    $.post('mysql_original/dataFromDB.php', {n_records: n_records}, function (data) {
        processData(data);
    });
}

function setMapOnAll(map_v) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map_v);
  }
}

function processData(data){
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
