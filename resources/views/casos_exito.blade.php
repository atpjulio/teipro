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

	<script type="text/javascript">
		$("#contenedor div").on("click", abrirFull);
		$("#previa").on("click", cerrarFull)

		function abrirFull(){
			//alert($(this).attr("id"));
			var nombre = $(this).attr("id") + "_big";
			var direccion = "img/" + nombre + ".jpg";

			$("#imgFull").attr('src', direccion);

			$("#previa").fadeIn();
		}

		function cerrarFull(){
			$("#previa").fadeOut();	
		}
	</script>
@endsection

@section('contenido')
<div class="container row">
	<div class="text-center tituloCentrado">
		Casos de Éxito
	</div>
	<div id="particles-js"></div>
	
	<div id="previa">
		<div>
			<img src="" id="imgFull">
		</div>
	</div>

	<div class="row container" id="contenedor">
		<div class="col-sm-offset-3 col-sm-5 proyectos" id="proyecto1">
			<img src="img/proyecto1.jpg" class="img-responsive col-sm-4" alt="proyecto1">
			Reparación Máquina de Corte Directo
		</div>
		<div class="col-sm-offset-3 col-sm-5 proyectos" id="proyecto2">
			<img src="img/proyecto2.jpg" class="img-responsive col-sm-4" alt="proyecto2">
			Adaptación de Montaje de Corte Directo marca ELE a GEODATALOG Series 2000 
		</div>
	</div>		
	

</div>
@endsection