@extends ('layouts.master')

@section ('css_path')
<link href="/css/instalacoes.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="pt1">
		<div class="col-md-12">
			<img src="images/instalacoes/06.jpg">
			<h2>INSTALAÇÕES</h2>
			<p>Contamos com grandiosos salões, poltronas e lareiras para nos esquentar nos dias mais frios, momento esse em que nossa piscina térmica é muito bem recebida. Quadras poliesportivas e aparelhos de musculação para manter a saúde em dia. E como o cérebro também é um musculo a se exercitar, que tal um passeio histórico pela revolução industrial no nosso antiquário ou nas masmorras? E quando vier a fome, nossos restaurantes e bares 24 horas estarão abertos para sacia-los.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/instalacoes/01.jpg">
		</div>
		<div class="col-md-7">
			<h3>Piscina Térmica</h3>
			<p>Piscina semi-olímpica coberta e com aquecimento. O teto de vidro possibilita tanto o bronzeamento dentro do espaço no momento do dia como o apreciar das estrelas a noite.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/instalacoes/02.jpg">
		</div>
		<div class="col-md-7">
			<h3>Quadras Poliesportivas</h3>
			<p>Temos na dependência do Hotel Stonehome três quadras poliesportivas e uma quadra de tênis profissional. Todas as quadras possuem iluminação noturna.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/instalacoes/05.jpg">
		</div>
		<div class="col-md-7">
			<a href="/restaurantes"><h3>Restaurantes e bares</h3></a>
			<p>Nossos restaurantes e bares funcionam 24 horas e fornecem o melhor da culinária européia. Temos ampla variedade e nos adaptamos as mais variadas dietas, com opções sem glutem, vegetarianas, sem sal e doces com baixo teor de açúcar.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/instalacoes/03.jpg">
		</div>
		<div class="col-md-7">
			<h3>Antiquário da Revolução Industrial</h3>
			<p>Desde as clássicas máquinas de tecer a vapor até o telefone temos no nosso antiquário catalogados mais de dois mil itens. Grande parte da decoração do nosso Hotel é feita com utensílios dessa época. Contamos com uma loja com presentes perfeitos para levar de recordação.</p>
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