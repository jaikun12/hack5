var map=new GMaps({
				div: '#map',
				lat: 14.560649,
				lng: 121.031672
				});	

map.setZoom(12);

function maps(){

	map.setCenter(16.560649, 122.031672)
	
	alert("asd");
	
}

function moveMap(sel){

	var lat;
	var lon;
	switch(sel.value){
		
		case 'a':
		var lat = 14.6829146;
		var lon = 120.9474747;
		break;
		
		case 'b':
		var lat=14.5794443;
		var lon=121.0359174;
		break;
		
		case 'c':
		var lat=14.59911613;
		var lon=120.98380566;
		break;
		
		case 'd':
		var lat=14.65073;
		var lon=121.1028546;
		break;
		
		case 'e':
		var lat=14.4081327;
		var lon=121.0414667;
		break;
		
		case 'f':
		var lat=14.5377516;
		var lon=121.0013794;
		break;
		
		case 'g':
		var lat=14.5763768;
		var lon=121.0851097;
		break;
		
		case 'h':	
		var lat=14.5994146;
		var lon=121.0368893;
		break;
		
		case 'i':
		var lat = 14.67136598;
		var lon = 121.05611801;
		break;
		
		 default:
        break;
		
		
	}
	
	map.setCenter(lat, lon);
	map.setZoom(14);
}