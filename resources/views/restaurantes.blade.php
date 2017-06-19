@extends ('layouts.master')

@section ('css_path')
<link href="/css/restaurantes.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="pt1">
		<div class="col-md-12">
			<img src="images/restaurantes/06.jpg">
			<h2>RESTAURANTES E BARES</h2>
			<p>Nossos restaurantes e bares funcionam 24 horas e fornecem o melhor da culinária européia. Utilizamos os famosos caldeirões de bronze de mais de 300 anos para nossas receitas, o que leva nossos pratos a ter um sabor único. Temos ampla variedade e nos adaptamos as mais variadas dietas, com opções sem glutem, vegetarianas, sem sal e doces com baixo teor de açúcar..</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/restaurantes/01.jpg">
		</div>
		<div class="col-md-7">
			<h3>Queen Carol Adams</h3>
			<p>Restaurante em homenagem a grandiosa rainha Carol Adams, que guiou o povo da Inglaterra em prol da libertação de povos que os oprimiam. A temática moderna mas com o glamour de nossas paredes de pedra faz do espaço algo muito além do que provedor de alimentos.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/restaurantes/05.jpg">
		</div>
		<div class="col-md-7">
			<h3>King Tom Regan</h3>
			<p>Nomeado em homenagem ao grandioso rei Tom Regan que guiou seu povo pela famosa "Batalha das Jaulas". A temática clássica, com quadros pinturas datadas em mais de dois séculos, fornecem um ambiente acolhedor e reservado.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/restaurantes/07.jpg">
		</div>
		<div class="col-md-7">
			<h3>Bar Old Fellow</h3>
			<p>Nosso bar conta com as mais diversas bebidas encontradas na região da Inglaterra. Desde o famoso Seager's Gin até o desconhecido Druid's Liquor, temos uma imensa variedade de bebidas industriais e artesanais para se apreciar.</p>
		</div>
	</div>

</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-hotel').addClass('active');
	});
</script>
@endsection