@extends ('layouts.master')

@section ('css_path')
<link href="/css/quarto.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div id="nome">
		<h1>King Albert</h1>
	</div>
	<div class="row">
		<div class="col-md-7" id="resumo-fotos">
			<h2>Resumo do quarto</h2>
			<p>2 adultos e 1 criança menor de 4 anos</p>
			<p>1 cama de casal</p><br>
			<p>O quarto foi inspirado nos gostos do rei Albert que reinou a inglaterra na segunda metade do século XV. Seus móveis possuem mais de um século de existência, trabalhados na melhor madeira maciça da região do Humber. Tecidos de cetim de melhor qualidade acompanham o conforto da cama de casal. Uma clarabóia na parte superior do quarto fornece uma incrível iluminação matinal, fazendo do despertar um ato de prazer.</p><br>
			<img src="/images/quartos/01.jpg">
		</div>
		<div class="col-md-5" id="detalhes">
			<table class="table table-striped">
				<tbody>
					<tr><td>Área de 26m2</td></tr>
					<tr><td>Cama de casal king size com aquecimento</td></tr>
					<tr><td>Roupas de cama em cetim</td></tr>
					<tr><td>Espelho grande</td></tr>
					<tr><td>Acesso a Internet Wi-Fi</td></tr>
					<tr><td>Chuveiro e WC independentes</td></tr>
					<tr><td>Roupões de banho e chinelos</td></tr>
					<tr><td>Berço para crianças(mediante solicitação)</td></tr>
				</tbody>
			</table>
		</div>
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