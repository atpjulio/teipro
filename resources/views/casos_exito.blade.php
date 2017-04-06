@extends('layouts.admin')

@section('titulo')
{{ 'Casos de Exito | TEIPRO' }}
@endsection

@section('menu1'){{ '' }} @endsection
@section('menu2'){{ '' }} @endsection
@section('menu3'){{ '' }} @endsection
@section('menu4'){{ '' }} @endsection
@section('menu5'){{ 'active' }} @endsection
@section('menu6'){{ '' }} @endsection

@section('eventos')
    <script src="js/particles.js"></script>
    <script src="js/particulas.js"></script>
@endsection

@section('contenido')
<div class="container row">
	<div class="text-center tituloCentrado">
		Casos de Éxito
	</div>
	<div id="particles-js">
	</div>
		<div class="row container">
			<div class="col-sm-offset-3 col-sm-5 proyectos">
				<img src="img/proyecto1.jpg" class="img-responsive col-sm-4" alt="">
				Reparación Máquina de Corte Directo
			</div>
			<div class="col-sm-offset-3 col-sm-5 proyectos">
				<img src="img/proyecto2.jpg" class="img-responsive col-sm-4" alt="">
				Adaptación de Montaje de Corte Directo marca ELE a GEODATALOG Series 2000 
			</div>
		</div>		
	

</div>
@endsection