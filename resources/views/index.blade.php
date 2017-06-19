@extends ('layouts.master')

@section ('css_path')
<link href="/css/inicio.css" rel="stylesheet">
@endsection

@section ('content')

<div id="myCarousel" class="carousel slide row" data-ride="carousel">

	<div class="carousel-inner">
		<div class="item active">
			<img src="/images/hotel/01.jpg" alt="Entrada">
		</div>

		<div class="item">
			<img src="/images/hotel/02.jpg" alt="Salão">
		</div>

		<div class="item">
			<img src="/images/hotel/03.jpg" alt="Restaurante">
		</div>

		<div class="item">
			<img src="/images/hotel/04.jpg" alt="Restaurante">
		</div>
	</div>

</div>

<div class="row" id="apresentacao">
	<div class="col-md-8" id="texto">
		<h1>Na belíssima região de Humber, onde pedra e madeira constroem memórias há mais de 700 anos</h1>
		<p>Venha ao Hotel Stonehome e faça uma viagem pela história da Inglaterra moderna, onde conforto e tranquilidade reinam. O design clássico casado com o advento das revoluções tecnológicas possibilitaram a família Westminster a reconstruir o então destruído castelo Kensington, se tornando uma das maiores referências arquiterônicas contemporâneas. A decoração de seus salões e quartos, distribuídos em 3 andares, assim como os túneis subterrâneos e masmorras, possibilitam uma viagem a história da Europa medieval, enquanto o antiquário da era industrial nos possibilita compreender a transição para os tempos modernos, onde nossas piscinas aquecidas e quadras poliesportivas nos reforçam os confortos contemporâneos. </p>
		<a href="/sobre" class="btn btn-default btn-lg"><span>Conheça o hotel</span></a>
	</div>
	<div class="col-md-4" id="apresentacao-imagem"></div>
</div>

<div class="row" id="quadros">
	<div class="col-md-6 nopadding quadro">
		<a href="/instalacoes">
			<img src='/images/hotel/02.jpg'>
			<h2>Desfrute do conforto<br><span>VISUALIZAR INSTAÇÕES</span></h2>
		</a>
	</div>
	<div class="col-md-6 nopadding quadro">
		<a href="/sobre">
			<img src='/images/hotel/09.jpg'>
			<h2>Viaje pela história<br><span>CONHEÇA O HOTEL</span></h2>
		</a>
	</div>
	<div class="col-md-6 nopadding quadro">
		<a href="/restaurantes">
			<img src='/images/hotel/07.jpg'>
			<h2>Sacie seu paladar<br><span>BARES E RESTAURANTES</span></h2>
		</a>
	</div>
	<div class="col-md-6 nopadding quadro">
		<a href="/quartos">
			<img src='/images/hotel/04.jpg'>
			<h2>Durma como a realeza<br><span>VISUALIZAR QUARTOS</span></h2>
		</a>
	</div>

</div>

<div class="row" id="eventos">
	<div class="col-md-6 evento">
		<h2>Reserve antecipadamente e economize</h2>
		<img src='/images/hotel/10.jpg'>
		<a href="https://www.booking.com/searchresults.pt-br.html?aid=318615;label=Portuguese_Brazil_PT_BR_27123293065-a3pa2ND40M4rxQPLZyny7gS102772903465%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atidsa-55482331735%3Alp1001773%3Ali%3Adec%3Adm;sid=fb4fde3e8defed1bc9229b3eb19bb515;class_interval=1;dest_id=-2598022;dest_type=city;dtdisc=0;group_adults=2;group_children=0;inac=0;index_postcard=0;label_click=undef;mih=0;no_rooms=1;offset=0;postcard=0;qrhpp=ac87c65e1bccf70a5552c9028480b281-city-0;room1=A%2CA;sb_price_type=total;search_selected=0;src=index;src_elem=sb;ss=halton;ss_all=0;ssb=empty;sshis=0;srpos=1;origin=search" target="_blank" class="btn btn-info btn-lg" role="button">RESERVE JÁ</a>
	</div>
	<div class="col-md-6 evento">
		<h2>Pacote de passeios promocionais</h2>
		<img src='/images/aventura/01.jpg'>
		<a href="https://www.booking.com/searchresults.pt-br.html?aid=318615;label=Portuguese_Brazil_PT_BR_27123293065-a3pa2ND40M4rxQPLZyny7gS102772903465%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atidsa-55482331735%3Alp1001773%3Ali%3Adec%3Adm;sid=fb4fde3e8defed1bc9229b3eb19bb515;class_interval=1;dest_id=-2598022;dest_type=city;dtdisc=0;group_adults=2;group_children=0;inac=0;index_postcard=0;label_click=undef;mih=0;no_rooms=1;offset=0;postcard=0;qrhpp=ac87c65e1bccf70a5552c9028480b281-city-0;room1=A%2CA;sb_price_type=total;search_selected=0;src=index;src_elem=sb;ss=halton;ss_all=0;ssb=empty;sshis=0;srpos=1;origin=search" target="_blank" class="btn btn-info btn-lg" role="button">VEJA A OFERTA</a>
	</div>
</div>
@endsection