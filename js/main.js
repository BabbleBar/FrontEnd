$(document).ready(function(){
		loadMaps();
	$('select').material_select();
});

function loadMaps(){
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
		'&signed_in=true&callback=initialize';
	document.body.appendChild(script);
}


var map = null;
function initialize() {
	var mapOptions = {
		center: {lat: 47.384885, lng: 8.533803},
		zoom: 15,
		draggable: true,
		scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map'),
			mapOptions);
	var image = './img/marker.png';


	fetch_data();
}

function fetch_data(){
	$.getJSON("./query-data.php", function(data){
		$.each(data, function(key, val){
			var r_lat = parseFloat(val.lat+"");
			var r_long = parseFloat(val.long+"");
			var marker = new google.maps.Marker({
				position: { lat: r_lat , lng: r_long },
				map: map,
				/* icon: image, */
				title: val.name+" "+val.id,
			});
		
			var vid = val.id;
			
			if(spl[vid] != null){
				var infowindow = new google.maps.InfoWindow({
					content: val.name + "<br>" + spl[0]["avg"]+" dB"
				});

				marker.addListener("click", function(){
					infowindow.open(map, marker);
				});
					
			}
		});
	});
}
