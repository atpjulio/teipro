@extends('layouts.admin')

@section('titulo')
{{ 'Nuestro Equipo | TEIPRO' }}
@endsection

@section('eventos')
<script type="text/javascript">
    var info1 = $('#informacionIntegrante1');
    var info2 = $('#informacionIntegrante2');

    $('#abrirInfo1').click(function(){
    	//info.css('display', 'block');
    	info1.slideDown();
    });
    $('#cerrarInfo1').click(function(){
      	//info.css('display', 'none');
    	info1.slideUp();
    });
    $('#abrirInfo2').click(function(){
    	//info.css('display', 'block');
    	info2.slideDown();
    });
    $('#cerrarInfo2').click(function(){
      	//info.css('display', 'none');
    	info2.slideUp();
    });
</script>
@endsection

@section('menu1'){{ '' }} @endsection
@section('menu2'){{ '' }} @endsection
@section('menu3'){{ '' }} @endsection
@section('menu4'){{ 'active' }} @endsection
@section('menu5'){{ '' }} @endsection
@section('menu6'){{ '' }} @endsection

@section('contenido')

<div class="container">
	<div class="text-center tituloCentrado">
		Nuestro Equipo
	</div>

	<div class="container row" id="informacionIntegrante1" style="display: none;">
		<div class="container">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-2" alt="">
			<p class="col-sm-10">
					<strong>Ing. Jhonathan A. Posada Cáceres</strong><br>
					<u>Director de Proyectos</u><br>
					<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
			</p>
		</div>
		<p>	
			Correo: atpjulio@gmail.com<br>
			<br>
			Número de contacto: (+57) 301-296.82.87<br>
			<br>
			Estudios:<br>
			<br>
			Doctorado en Ingeniería Electrónica - Sabanci University<br>
			Especialización en Redes de Computadores - Universidad del Norte<br>
			Ingeniería Electrónica - Universidad del Norte<br>
			Maestría en Ingeniería Electrónica - Universidad del Norte<br>
			Publicaciones (últimos 5 años)<br>
			<br>
			Articulo: Asynchronous Decoding of Finger Movements from Ecog Signals Using Long-range Dependencies Conditional Random Fields Journal of Neural Engineering (2016).<br>
			Articulo: Word-level Language Modeling for P300 Spellers Based On Discriminative Graphical Models Journal of Neural Engineering (2015).<br>
			Articulo: Discriminative Methods for Classification of Asynchronous Imaginary Motor Tasks from Eeg Data IEEE Transactions on Neural Systems and Rehabilitation Engineering (2013).<br>
			Articulo: Identification of Explosive Substances Through Improved Signals Obtained by a Portable Raman Spectrometer Spectroscopy Letters (2012).<br>
		</p>
		<button id="cerrarInfo1" class="btn btn-success">Listo</button>
	</div>
	<div class="container row" id="informacionIntegrante2" style="display: none;">
		<div class="container">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-2" alt="">
			<p class="col-sm-10">
				<strong>Lic. Andrea Posada Cáceres</strong><br>
				<u>Director de Contabilidad</u><br>
				<i>Lic. En Contabilidad</i><br>
			</p>
		</div>
		<p>	
			Correo: atpjulio@gmail.com<br>
			<br>
			Número de contacto: (+57) 301-296.82.87<br>
			<br>
			Estudios:<br>
			<br>
			Especialización en Procesos Pedagógicos - Universidad del Norte<br>
			Maestría en Micro Electronica - Universidad de los Andes<br>
			Ingeniería Eléctrica - Universidad del Norte<br>
			Publicaciones (últimos 5 años)<br>
			<br>
			Articulo: ANÁLISIS de Topología y Restricciones de Seguridad en Mercados Eléctricos <br>Competitivos: Aplicación al Sistema Eléctrico de República Dominicana Interciencia (2015).<br>
			Articulo: Economic Impact of Renewable Generation On the Cost of Energy Supply Journal of Energy and Power Engineering (2013).<br>
			Capitulo en Libro: Proceeding-Analysis of Competitive Electricity Markets With Proceedign-4th International Youth Conference on Energy (2013).<br>
			Proceeding: Proceeding-Economic Impact of Renewable Generation On the Cost of Energy Supply and On the Adjustment Services (2012).<br>
			--Publicaciones con afiliación institucional Universidad del Norte--
			<br>
		</p>
		<button id="cerrarInfo2" class="btn btn-success">Listo</button>
	</div>
	<div class="row centrarDiv">
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Ing. Jhonathan A. Posada Cáceres</strong><br>
				<u>Director de Proyectos</u><br>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
				<a id="abrirInfo1" link=""><small>Ver mas...</small></a>

			</p>
 		</div>
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Lic. Andrea Posada Cáceres</strong><br>
				<u>Director de Contabilidad</u><br>
				<i>Lic. En Contabilidad</i><br>
				<a id="abrirInfo2" link=""><small>Ver mas...</small></a>
			</p>
		</div>
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Ing. Jhonathan A. Posada Cáceres</strong><br>
				<u>Director de Proyectos</u><br>
				<i>M.Sc en Automatización, Robótica y Control</i><br>
				<small>Ver mas...</small>
			</p>
		</div>
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Lic. Andrea Posada Cáceres</strong><br>
				<u>Director de Contabilidad</u><br>
				<i>Lic. En Contabilidad</i><br>
				<small>Ver mas...</small>
			</p>
		</div>
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Ing. Jhonathan A. Posada Cáceres</strong><br>
				<u>Director de Proyectos</u><br>
				<i>M.Sc en Automatización, Robótica y Control</i><br>
				<small>Ver mas...</small>
			</p>
		</div>
		<div class="col-sm-5 integrantes">
			<img src="img/imagen_integrante.png" class="img-responsive col-sm-4" alt="">
			<p class="col-sm-8">
				<strong>Lic. Andrea Posada Cáceres</strong><br>
				<u>Director de Contabilidad</u><br>
				<i>Lic. En Contabilidad</i><br>
				<small>Ver mas...</small>
			</p>
		</div>
	</div>
</div>

@endsection

