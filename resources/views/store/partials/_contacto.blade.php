<div class="container-fluid">
	<div class="row">
  		<div class="page-header">
  			<h3> Mayor información: </h3>
		</div>
		<div class="panel text-justify">
			<div class="panel-body">
				<div class="container-fluid">
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-map-marker"></i> Dirección: </strong>
							<hr>
							<p>Adalberto Tejeda #166, Colonia Los Olivos, <br>Delegación Tláhuac. México C.P. 13210</p>
						</address>
					</div>
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-phone-square"></i> Télefono: </strong>
							<hr>
							<p>Llama ahora: <br>(55) 5850 2716, 5850-2717, 5850-2718</p>
							<strong>Fax: </strong>
							<p>Ext. 110</p>
						</address>
					</div>
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-envelope"></i> Correo electrónico: </strong>
							<hr>
							<p>Ventas: <a href="mailto:#" style="color: #000;">ventas@bayusa.com.mx</a> <br> Pedidos: <a href="mailto:#" style="color: #000;">pedidos@bayusa.com.mx</a></p>
						</address>
					</div>
				</div>
			</div>
	  	</div>
	</div>
	<div class="row">
	  	<div class="panel">
	  		<div class="panel-heading">
	  			<h3 class="panel-title">
	  				Ubicación
	  			</h3>
	  		</div>
	  		<div class="panel-body">
	  					<div id="map" class="span12"></div>
	  		</div>
		
		  	<script>
		  		function initMap() {
				  var myLatLng = {lat: 19.298107, lng: -99.0579072};

				  // Create a map object and specify the DOM element for display.
				  var map = new google.maps.Map(document.getElementById('map'), {
				    center: myLatLng,
				    scrollwheel: false,
				    zoom: 16
				  });

				  // Create a marker and set its position.
				  var marker = new google.maps.Marker({
				    map: map,
				    position: myLatLng,
				    title: 'Bayusa de México, S.A de C.V!'
				  });

				  var coordInfoWindow = new google.maps.InfoWindow();
				  coordInfoWindow.setContent(createInfoWindowContent(myLatLng, map.getZoom()));
				  coordInfoWindow.setPosition(myLatLng);
				  coordInfoWindow.open(map);
				  
				  function createInfoWindowContent(latLng, zoom) {
					  return [
					    'Bayusa de México, S.A de C.V'
					  ].join('<br>');
					}
				}
		  	</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMwC5jPmLMAl7gKNQykCXnaaS13iTVpA4&callback=initMap"></script>
		</div>
	</div>
</div>