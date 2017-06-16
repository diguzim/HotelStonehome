@extends ('layouts.master')

@section ('css_path')
<link href="/css/contato.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row">
		<div class="col-md-4" id="contato">
			<h1>Contato</h1>
			<p>+24 326 151 840</p>
			<p>contact@stonehomehotel.com</p><br>
			<p>Halton Road, 42</p>
			<p>Humber - 48151-623 - England</p>
			<div id="map"></div>
			<script>
				function initMap() {
					var map = new google.maps.Map(document.getElementById('map'), {
						center: {lat: 54.070358, lng: -2.790076},
						zoom: 15
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
		<div class="col-md-8" id="mensagem">
			<p>Por favor, preencha o formulário abaixo com a sua pergunta ou comentário e entraremos em contato assim que possível.</p>
			<form>
				<div class="form-group">
				<label for="nome">NOME</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="" required>
				</div>
				<div class="form-group">
				<label for="email">E-MAIL</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="" required>
				</div>
				<div class="form-group">
				<label for="nome">TELEFONE</label>
					<input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
				</div>
				<div class="form-group">
				<label for="mensagem">MENSAGEM</label>
					<textarea class="form-control" id="mensagem" name="mensagem" rows="7" required></textarea>
				</div>
				<button type="submit" class="btn btn-default btn-lg">ENVIAR</button>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-contato').addClass('active');
	});
</script>
@endsection