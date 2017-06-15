@extends ('layouts.master')

@section ('css_path')
<link href="/css/galeria.css" rel="stylesheet">
@endsection

@section ('content')
<div id="background">
</div>

<div class="container" id="info">
	
</div>

<script>
	$(document).ready(function () {
		$(".nav li").removeClass("active");//this will remove the active class from  
		//previously active menu item 
		$('#nav-galeria').addClass('active');
	});
</script>
@endsection