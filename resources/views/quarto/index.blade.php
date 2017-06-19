@extends ('layouts.master')

@section ('css_path')
<link href="/css/quartos.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<h1>Quartos</h1>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/01.jpg">
			<h2>King Albert</h2>
		</a>
	</div>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/02.jpg">
			<h2>Queen Livia</h2>
		</a>
	</div>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/03.jpg">
			<h2>Princess Elizabeth</h2>
		</a>
	</div>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/04.jpg">
			<h2>Knight Steiner</h2>
		</a>
	</div>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/05.jpg">
			<h2>Priest Zidane</h2>
		</a>
	</div>
	<div class="quarto-miniatura">
		<a href="/quartos/quarto">
			<img src="/images/quartos/06.jpg">
			<h2>Ambassador George</h2>
		</a>
	</div>
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-quartos').addClass('active');
	});
</script>
@endsection