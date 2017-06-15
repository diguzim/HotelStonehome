@extends ('layouts.master')

@section ('css_path')
<link href="/css/localizacao.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="foto-endereco">
		<div class="col-md-5" id="foto">
			<img src="/images/localizacao/01.jpg">
		</div>
		<div class="col-md-7" id="endereco">
			<h2>Localização</h2>
			<p>Halton Road, 42</p>
			<p>Humber - 48151-623 - England</p>
			<p>Tel: +24 326 151 840</p>
			<p>Fax: +24 326 151 804</p>
			<p>contact@stonehomehotel.com</p>
		</div>
	</div>
	<div class="row" id="mapa">
		<div id="map"></div>
		<script>
			function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 54.070358, lng: -2.790076},
					zoom: 17
				});
			var hotel = {lat: 54.070358, lng: -2.790076};
			var marker = new google.maps.Marker({
	        	position: hotel,
	        	map: map
	        	});
			}
		</script>
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOJaBrApGIyIC8-phuApt7g3qvME3YaDU&callback=initMap">
		</script>

	</div>
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-localizacao').addClass('active');
	});
</script>
@endsection