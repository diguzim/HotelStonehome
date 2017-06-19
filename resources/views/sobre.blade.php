@extends ('layouts.master')

@section ('css_path')
<link href="/css/sobre.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div class="row" id="pt1">
		<div class="col-md-12">
			<img src="images/hotel/01.jpg">
			<h2>O HOTEL</h2>
			<p>Datado em meados do século XIII, o castelo Kensington, hoje Hotel Stonehome, carrega em si grande parte da história da Inglaterra.<br>Destruído durante a guerra civil inglesa e reconstruído posteriormente pela família Westminster, consta há mais de 200 anos como um dos principais pontos turísticos na região do Humber. Seu design enquanto preserva a natureza das épicas construções britânicas trás também o ar do novo, o conforto das maravilhsas modernas. <br>Seus profundos e escuros túneis despertam sentimentos de uma época que só conhecemos em livros e filmes, enquanto o antiquário da revolução industrial reconstrói os passos dos avanços tecnológicos que possibilitam hoje um mergulho nas nossas piscinas térmicas. Stonehome fornece aquilo que há de melhor para construir excelentes capítulos na memória daqueles que por aqui passarem.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/sobre/02.jpg">
		</div>
		<div class="col-md-7 texto">
			<a href="/instalacoes"><h3>Instalações</h3></a>
			<p>Contamos com grandiosos salões, poltronas e lareiras para nos esquentar nos dias mais frios, momento esse em que nossa piscina térmica é muito bem recebida.
			<br>Quadras poliesportivas e aparelhos de musculação para manter a saúde em dia. E como o cérebro também é um musculo a se exercitar, que tal um passeio histórico pela revolução industrial no nosso antiquário ou nas masmorras? E quando vier a fome, nossos restaurantes e bares 24 horas estarão abertos para sacia-los.c</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/sobre/03.jpg">
		</div>
		<div class="col-md-7 texto">
			<a href="/quartos"><h3>Quartos</h3></a>
			<p>O design dos quartos foram pensados em trazer as memórias dos momentos antigos, a glória dos castelos reais e sua exuberância. As paredes de pedras que antes protegiam de invasões, agora servem de proteção para a construção de suas belíssimas lembranças no Hotel Stonehome.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/sobre/04.jpg">
		</div>
		<div class="col-md-7 texto">
			<a href="/atividades"><h3>Atividades e Serviços</h3></a>
			<p>Grande parte da decoração do hotel são de objetos da época da revolução industrial. Oferecemos visitas guiadas ao nosso antiquário assim como os túneis e masmorras preservados há mais de meio milênio.</p>
		</div>
	</div>
	<div class="row pt2">
		<div class="col-md-5">
			<img src="images/sobre/01.jpg">
		</div>
		<div class="col-md-7 texto">
			<a href="/eventos"><h3>Eventos</h3></a>
			<p>Onde antigamente eram realizados casamentos reais, estabelecendo assim alianças entre grandes impérios, pode ser o espaço para sua cerimônia e festa de casamento, ou também como uma reunião corporativa. Há anos tradicionalmente organizando eventos grandiosos, realizamos desde o preparo até a execução dos detalhes do seu evento. Entre em contato conosco para saber mais.</p>
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