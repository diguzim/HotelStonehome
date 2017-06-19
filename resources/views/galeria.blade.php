@extends ('layouts.master')

@section ('css_path')
<link href="/css/galeria.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container-fluid" id="info">
	<a href="images/hotel/01.jpg"><img src="images/hotel/01.jpg"></a>
	<a href="images/hotel/02.jpg"><img src="images/hotel/02.jpg"></a>
	<a href="images/hotel/03.jpg"><img src="images/hotel/03.jpg"></a>
	<a href="images/hotel/04.jpg"><img src="images/hotel/04.jpg"></a>
	<a href="images/hotel/05.jpg"><img src="images/hotel/05.jpg"></a>
	<a href="images/hotel/06.jpg"><img src="images/hotel/06.jpg"></a>
	<a href="images/hotel/07.jpg"><img src="images/hotel/07.jpg"></a>
	<a href="images/hotel/08.jpg"><img src="images/hotel/08.jpg"></a>
	<a href="images/hotel/09.jpg"><img src="images/hotel/09.jpg"></a>
	<a href="images/hotel/10.jpg"><img src="images/hotel/10.jpg"></a>
	<a href="images/quartos/01.jpg"><img src="images/quartos/01.jpg"></a>
	<a href="images/quartos/02.jpg"><img src="images/quartos/02.jpg"></a>
	<a href="images/quartos/03.jpg"><img src="images/quartos/03.jpg"></a>
	<a href="images/quartos/04.jpg"><img src="images/quartos/04.jpg"></a>
	<a href="images/quartos/05.jpg"><img src="images/quartos/05.jpg"></a>
	<a href="images/quartos/06.jpg"><img src="images/quartos/06.jpg"></a>
	<a href="images/eventos/01.jpg"><img src="images/eventos/01.jpg"></a>
	<a href="images/eventos/02.jpg"><img src="images/eventos/02.jpg"></a>
	<a href="images/eventos/03.jpg"><img src="images/eventos/03.jpg"></a>
	<a href="images/eventos/04.jpg"><img src="images/eventos/04.jpg"></a>
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-galeria').addClass('active');
	});
</script>
@endsection