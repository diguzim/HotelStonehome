@extends ('layouts.master')

@section ('css_path')
<link href="/css/atividades.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="pt1">
		<div class="col-md-12">
			<img src="images/atividades/01.jpg">
			<h2>ATIVIDADES E SERVIÇOS</h2>
			<p>Contamos com diversas atividades culturais e recreativas nas dependências do Hotel Stonehome e suas redondezas. Desde passeios pelas regiões mais sombrias de nosso castelo até atividades ao ar livre como passeios e trilhas guiadas, o que não falta são atividades para construir o que há de melhor nas suas lembranças.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/atividades/03.jpg">
		</div>
		<div class="col-md-7">
			<h2>ANTIQUÁRIO DA REVOLUÇÃO INDUSTRIAL</h2>
			<p>Passeio guiado pelo famoso antiquário da revolução industrial, onde iremos nos aventurar pelos detalhes dos processos de evolução tecnológica e social que se decorreram desde o século XVIII na Inglaterra. Contamos com uma maravilhosa loja no espaço para levar aquela lembrança de seu passeio.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/atividades/02.jpg">
		</div>
		<div class="col-md-7">
			<h2>TUNEIS E MASMORRAS</h2>
			<p>Passeio guiado pelos tuneis e masmorras do Hotel Stonehome, quando ainda era conhecido como castelo Kensington. Grande parte foi restaurada buscando ao máximo manter sua originalidade, enquanto buscamos preservar as ruinas externas a fim de nos aproximarmos mais dos períodos históricos conflituosos e de suas batalhas épicas.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/atividades/04.jpg">
		</div>
		<div class="col-md-7">
			<h2>TRILHAS</h2>
			<p>Trilhas guiadas pela região do Humber. Oferecemos tanto passeios para crianças e idosos quanto trilhas para aventureiros experientes e corajosos. Que tal conhecer o glorioso lago do Grummer e suas lendas típicas? Ou quem sabe uma visita por ruínas de castelos e fortes? Entre em contato conosco e agende previamente seu passeio com um desconto especial.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/atividades/05.jpg">
		</div>
		<div class="col-md-7">
			<h2>ATIVIDADES INFANTIS</h2>
			<p>Para as crianças nada melhor do que atividades para se divertirem, e para os pais nada melhor do que um pouco de tranquilidade. Temos inúmeras atividades infantis para crianças de 6 a 15 anos, todas comandadas por profissionais capacitados. Desde passeios guiados pela cidade até arborismo, seu descendente real estará se divertindo em segurança!</p>
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