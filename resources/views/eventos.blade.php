@extends ('layouts.master')

@section ('css_path')
<link href="/css/eventos.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="pt1">
		<div class="col-md-12">
			<img src="images/eventos/01.jpg">
			<h2>ATIVIDADES E SERVIÇOS</h2>
			<p>Já pensou em fazer o seu casamento em um lugar especial? Que tal aquela reunião corporativa para passar confiança para a sua equipe e traçar novas estratégias? No Hotel Stonehome fornecemos toda a estrutura para a realização desses e outros eventos. Entre em contato conosco para saber mais.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/eventos/03.jpg">
		</div>
		<div class="col-md-7">
			<h2>EVENTOS CORPORATIVOS</h2>
			<p>Contamos com uma sala qualificada para exibição de palestras, acomodando até 120 pessoas confortavelmente. Temos uma equipe culinária qualificada para preparar o seu buffet, ou quem sabe um jantar de gala?</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/eventos/04.jpg">
		</div>
		<div class="col-md-7">
			<h2>CASAMENTOS</h2>
			<p>Em um espaço onde há mais de 700 anos são feitos casamentos memoráveis, hoje pode ser a sua vez de escrever o seu nome na história se casando no Hotel Stonehome. Temos profissionais capacitados para o preparo e execução desse memorável evento. Desde a decoração até o cardápio fornecemos a estrutura e orientação adequada para fazer desse evento inesquecível.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/eventos/02.jpg">
		</div>
		<div class="col-md-7">
			<h2>CULINÁRIA PARA EVENTOS</h2>
			<p>Nossa equipe culinária e seus famosos caldeirões de bronze estão preparados para executar os mais variados pratos.</p>
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