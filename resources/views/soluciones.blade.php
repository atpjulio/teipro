@extends('layouts.admin')

@section('titulo')
{{ 'Soluciones | TEIPRO' }}
@endsection

@section('menu1'){{ '' }} @endsection
@section('menu2'){{ '' }} @endsection
@section('menu3'){{ 'active' }} @endsection
@section('menu4'){{ '' }} @endsection
@section('menu5'){{ '' }} @endsection
@section('menu6'){{ '' }} @endsection

@section('contenido')
<div class="container row">
	<div class="text-center tituloCentrado">
		Soluciones TEIPRO Colombia
	</div>
	<div class="col-sm-4">
		<div class="textoTitulos">Mantenimiento Electrónico</div>
		<div class="textoContenido1"><br>
			•	Diagnóstico técnico, mantenimiento preventivo y correctivo con énfasis en
				sistemas electrónicos complejos. <br>
			•	Fabricación de tarjetas electrónicas y componentes no comerciales. <br>
			•	Montaje de Infraestructura tecnológica y de telecomunicaciones.
			<img src="img/mantenimiento.jpg" class="img-responsive img-rounded">		
		</div>
	</div>

	<div class="col-sm-4">
		<div class="textoTitulos">Automatización Industrial</div>
		<div class="textoContenido1"><br>
			•	Fabricación de tableros electrónicos basados en PLCs, variadores, relevos y/o contactores. <br>
			•	Planes graduales de automatización.<br>
			•	Repotenciación electrónica de maquinaria obsoleta.<br> 
			•	 Control, instrumentación y telemetría de variables del proceso industrial (presión, temperatura, proximidad, humedad, nivel, entre otros). 
			<img src="img/automatizacion.jpg" class="img-responsive img-rounded">
		</div> 
	</div>

	<div class="col-sm-4">
		<div class="textoTitulos">Tecnologías para un Mundo Mejor</div>
		<div class="textoContenido1"><br>
			•	Diseño de productos y servicios basados en TIC, GIS, robótica, energías alternativas y nuevos materiales. <br>
			•	Proyectos para apropiación social de las TIC. <br>
			•	Comercialización de dispositivos electrónicos.
			<img src="img/tecnologias.jpg" class="img-responsive img-rounded">
		</div>
	</div>

</div>

@endsection