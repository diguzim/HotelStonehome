@extends ('layouts.master')

@section ('css_path')
<link href="/css/quarto.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	<div id="nome">
		<h1>Quarto X</h1>
	</div>
	<div class="row">
		<div class="col-md-7" id="resumo-fotos">
			<h2>Resumo do quarto</h2>
			<p>2 pessoas</p>
			<p>1 cama de casal</p><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
			<img src="/images/quartos/04.jpg">
		</div>
		<div class="col-md-5" id="detalhes">
			<table class="table table-striped">
				<tbody>
					<tr><td>lalalalala</td></tr>
					<tr><td>lalalalala</td></tr>
					<tr><td>lalalalala</td></tr>
					<tr><td>lalalalala</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection