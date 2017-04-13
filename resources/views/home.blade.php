@extends('layouts.header')

@section('contenido')
<br>
<div class="container-fluid center-block">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 90%; margin: auto;">
  				<!-- Indicators -->
  				<ol class="carousel-indicators">
    				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  				</ol>

  			<!-- Wrapper for slides -->
  			<div class="carousel-inner" role="listbox">
    			<div class="item active">
      				<img src="img/slide1.jpg" alt="" class="img img-rounded">
      				<div class="carousel-caption">
                <h3> 
                  TEIPRO Colombia
                </h3>
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide2.jpg" alt="" class="img img-rounded">
      				<div class="carousel-caption">
                <h3> 
                  Mantenimiento Electrónico
                  <br>
                </h3>
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide3.jpg" alt="" class="img img-rounded">
      				<div class="carousel-caption">
                <h3> 
                  Automatización Industrial
                  <br>
                </h3>
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide0.jpg" alt="" class="img img-rounded">
      				<div class="carousel-caption">
                <h3> 
                  Tecnologías para un mundo mejor
                </h3>
      				</div>
    			</div>
  			</div>
		</div></div>
<div class="container-fluid row">
  <div class="text-center tituloCentrado">
    Soluciones TEIPRO Colombia
  </div>
  <div class="col-sm-4">
    <div class="textoTitulos">Mantenimiento Electrónico</div>
    <div class="textoContenido1"><br>
      • Diagnóstico técnico, mantenimiento preventivo y correctivo con énfasis en
        sistemas electrónicos complejos. <br>
      • Fabricación de tarjetas electrónicas y componentes no comerciales. <br>
      • Montaje de Infraestructura tecnológica y de telecomunicaciones.
      <img src="img/mantenimiento.jpg" class="img-responsive img-rounded">    
    </div>
  </div>

  <div class="col-sm-4">
    <div class="textoTitulos">Automatización Industrial</div>
    <div class="textoContenido1"><br>
      • Fabricación de tableros electrónicos basados en PLCs, variadores, relevos y/o contactores. <br>
      • Planes graduales de automatización.<br>
      • Repotenciación electrónica de maquinaria obsoleta.<br> 
      •  Control, instrumentación y telemetría de variables del proceso industrial (presión, temperatura, proximidad, humedad, nivel, entre otros). 
      <img src="img/automatizacion.jpg" class="img-responsive img-rounded">
    </div> 
  </div>

  <div class="col-sm-4">
    <div class="textoTitulos">Tecnologías para un Mundo Mejor</div>
    <div class="textoContenido1"><br>
      • Diseño de productos y servicios basados en TIC, GIS, robótica, energías alternativas y nuevos materiales. <br>
      • Proyectos para apropiación social de las TIC. <br>
      • Comercialización de dispositivos electrónicos.
      <img src="img/tecnologias.jpg" class="img-responsive img-rounded">
    </div>
  </div>

</div>

@endsection