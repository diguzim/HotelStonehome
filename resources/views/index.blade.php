@extends ('layouts.master')

@section ('content')

<div id="myCarousel" class="carousel slide row" data-ride="carousel">

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

</div>

<div class="row" id="apresentacao">
	<div class="col-md-8" id="texto">
		<h1>Na belíssima região de Humber, onde pedra e madeira constroem memórias há mais de 700 anos</h1>
		<p>Venha ao Hotel Stonehome e faça uma viagem pela história da Inglaterra moderna, onde conforto e tranquilidade reinam. O design clássico casado com o advento das revoluções tecnológicas possibilitaram a família Westminster a reconstruir o então destruído castelo Kensington, se tornando uma das maiores referências arquiterônicas contemporâneas. A decoração de seus salões e quartos, distribuídos em 3 andares, assim como os túneis subterrâneos e masmorras, possibilitam uma viagem a história da Europa medieval, enquanto o antiquário da era industrial nos possibilita compreender a transição para os tempos modernos, onde nossas piscinas aquecidas e quadras poliesportivas nos reforçam os confortos contemporâneos. </p>
		<button type="button" class="btn btn-default btn-lg"><span>Conheça o hotel</span></button>
	</div>
	<div class="col-md-4" id="apresentacao-imagem"></div>
</div>

<div class="row" id="quadros">
	<div class="col-md-6 nopadding">
		<img src='/images/hotel/pedra/02.jpg'>
	</div>
	<div class="col-md-6 nopadding">
		<img src='/images/hotel/pedra/09.jpg'>
	</div>
	<div class="col-md-6 nopadding">
		<img src='/images/hotel/pedra/07.jpg'>
	</div>
	<div class="col-md-6 nopadding">
		<img src='/images/hotel/pedra/04.jpg'>
	</div>

</div>

<div class="row" id="eventos">
	<div id="evento">
		<h2>Reserve antecipadamente e economize</h2>
		<img src='/images/hotel/pedra/10.jpg'>
		<button type="button" class="btn btn-default btn-lg"><span>RESERVE JÁ</span></button>
	</div>
	<div id="evento">
		<h2>Pacote de passeios promocionais</h2>
		<img src='/images/aventura/01.jpg'>
		<button type="button" class="btn btn-default btn-lg"><span>VEJA A OFERTA</span></button>
	</div>
</div>
@endsection