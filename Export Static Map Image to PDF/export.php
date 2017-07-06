<?php 

session_start();


$theatres = array('1st Floor, World Trade Park, D, J.L.N Marg, C-Block, Sector 9, Malviya Nagar, Jaipur, Rajasthan 302017','Entertainment Paradise Campus, Jawahar Cir, Ambedkar Colony, Surajpura, Jaipur, Rajasthan 302029','Jaipur Cityplex Mall. 1, Ashram Marg, Tonk Road Junction, Near Hotel Fortune Park Bella Casa, Jaipur, Rajasthan 302018');

if(isset($_REQUEST['img_url'])){

	$_SESSION['img'] = $_REQUEST['img_url'];

}


 ?>

<html>
<head>
	<title>Google Maps JavaScript API</title>
	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
		}
		#map{
			height: 500px;
			width: 800px;
			margin: 100 auto 0;
		}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7BSB-Jt2WrQiTbPoj6KUNc4LU4KmUCBU&callback=initMap" async defer></script>
	<script type="text/javascript">

		var map;

		var mapOptions;

		var markers = [];

		var theatres =<?php echo json_encode($theatres);?>;

		function initMap(){

			mapOptions = {
         	   	center: new google.maps.LatLng(26.845179, 75.802219),
            	zoom: 15
        	};

			map = new google.maps.Map(document.getElementById('map'),mapOptions);

			fetchMarkers();

		}

		function fetchMarkers(){

		    for (var i = 0; i < theatres.length; i++) {

		    	var coords = [];

		        currAddress = theatres[i];
		        var geocoder = new google.maps.Geocoder();

		        if (geocoder) {
		            geocoder.geocode({'address':currAddress}, function(results, status) {
		                if (status == google.maps.GeocoderStatus.OK) {
		                    coords.push(results[0].geometry.location);

		                    // Check if all calls have been processed
		                    if (coords.length == theatres.length) {
		                        createMarkers(coords);
		                    }
		                }

		            });
		        }

		    }

		}

		function createMarkers(coords){

			labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

			for(var i = 0; i < coords.length; i++){

				var marker = new google.maps.Marker({
		            position: coords[i],
		            map: map,
		            label: labels[i % labels.length]
		        });

		        markers.push(marker);

			}

		}

		function Export() {
	        //URL of Google Static Maps.
	        var staticMapUrl = "https://maps.googleapis.com/maps/api/staticmap";
	 
	        //Set the Google Map Center.
	        staticMapUrl += "?center=" + map.center.lat() + "," + map.center.lng();
	 
	        //Set the Google Map Size.
	        staticMapUrl += "&size=800x500";
	 
	        //Set the Google Map Zoom.
	        staticMapUrl += "&zoom=" + map.zoom;
	 
	        //Set the Google Map Type.
	        staticMapUrl += "&maptype=" + map.mapTypeId;
	 
	        //Loop and add Markers.
	        for (var i = 0; i < markers.length; i++) {
	            staticMapUrl += "&markers=color:red|label:"+ markers[i].label +"|" + markers[i].position.lat() + "," + markers[i].position.lng();
	        }

	        //Adding API key to our request URL

	        staticMapUrl += "&key=AIzaSyC7BSB-Jt2WrQiTbPoj6KUNc4LU4KmUCBU";
	 
	        //Display the Image of Google Map.
	        var imgMap = document.getElementById("imgMap");
	        imgMap.src = staticMapUrl;
	        imgMap.style.display = "block";

	        $.ajax({
  				url: "export.php",
  				method: "POST",
			  	data: {
			    	img_url: staticMapUrl
			  	},
			  	success: function( result ) {
				    window.location.href = "pdf.php";
			  	}
			});
	    }
		
	</script>
</head>
<body>
	<div id="map"></div>
	<input type="button" id="btnExport" value="Export" onclick="Export()" />
	<img id="imgMap" alt="" />
</body>
</html>