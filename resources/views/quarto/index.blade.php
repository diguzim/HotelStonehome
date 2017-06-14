@extends ('layouts.master')

@section ('css_path')
<link href="/css/quarto.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div id="quartos">
	<div class="quarto-miniatura">
		<a href="#">
			<img src="/images/quartos/04.jpg">
			<h2>King Albert</h2>
		</a>
	</div>
	@for ($i=0; $i<7; $i++)
	<div class="quarto-miniatura">
		<a href="#">
			<img src="/images/quartos/05.jpg">
			<h2>Prince Jerom</h2>
		</a>
	</div>
	@endfor
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-quartos').addClass('active');
	});
</script>
@endsection