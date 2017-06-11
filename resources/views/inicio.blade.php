@extends ('layouts.master')

@section ('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="/images/hotel/pedra/01.jpg" alt="Entrada">
		</div>

		<div class="item">
			<img src="/images/hotel/pedra/02.jpg" alt="Salão">
		</div>

		<div class="item">
			<img src="/images/hotel/pedra/03.jpg" alt="Restaurante">
		</div>

		<div class="item">
			<img src="/images/hotel/pedra/04.jpg" alt="Restaurante">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!--
<div id="imagem">
</div>
-->
@endsection