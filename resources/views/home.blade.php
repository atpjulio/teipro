@extends('layouts.admin')
@section('contenido')

<div class="container-fluid center-block">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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
      				<img src="img/slide1.jpg" alt="...">
      				<div class="carousel-caption row">
      					<div class="col-sm-4 textoSlide">
        					Mantenimiento Electrónico
        				</div>
      					<div class="col-sm-4 textoSlide">
        					Automatización Industrial
        				</div>
      					<div class="col-sm-4 textoSlide">
        					Tecnologías para un Mundo Mejor
        				</div>
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide2.jpg" alt="...">
      				<div class="carousel-caption">
      					<div class="col-sm-3 textoSlide">
        					Mantenimiento Electrónico
        				</div>
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide3.jpg" alt="...">
      				<div class="carousel-caption">
        			...
      				</div>
    			</div>
    			<div class="item">
      				<img src="img/slide4.jpg" alt="...">
      				<div class="carousel-caption">
        			...
      				</div>
    			</div>
  			</div>
  			<!-- Controls -->
  			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div></div>
		<div class="row">
			<div class="col-sm-7">
				<div class="textoTitulos text-center">Mantenimiento Electrónico</div><br>
				<div class="textoContenido">
					•	Diagnóstico técnico, mantenimiento preventivo y correctivo con énfasis en
						sistemas electrónicos complejos.<br> 
					•	Fabricación de tarjetas electrónicas y componentes no comerciales.<br>
					•	Montaje de Infraestructura tecnológica y de telecomunicaciones.<br>
				</div>
			</div>
			<div class="col-sm-5 drawBox">
				<img src="img/mantenimiento.jpg" class="img-responsive img-rounded">
			</div>
		</div>				
		<div class="row">
			<div class="col-sm-5 drawBoxLeft">
				<img src="img/automatizacion.jpg" class="img-responsive img-rounded">
			</div>
			<div class="col-sm-7">
				<div class="textoTitulos text-center">Automatización Industrial</div><br>
				<div class="textoContenido">
					•	Fabricación de tableros electrónicos basados en PLCs, variadores, relevos y/o contactores. <br>
					•	Planes graduales de automatización.<br>
					•	Repotenciación electrónica de maquinaria obsoleta. <br>
					•	 Control, instrumentación y telemetría de variables del proceso industrial (presión, temperatura, proximidad, humedad, nivel, entre otros). <br>
				</div>				
			</div>
		</div>				
		<div class="row">
			<div class="col-sm-7">
				<div class="textoTitulos text-center">Tecnologías para un Mundo Mejor</div><br>
				<div class="textoContenido">
					•	Diseño de productos y servicios basados en TIC, GIS, robótica, energías alternativas y nuevos materiales. <br>
					•	Proyectos para apropiación social de las TIC. <br>
					•	Comercialización de dispositivos electrónicos.<br>
				</div>
			</div>
			<div class="col-sm-5 drawBox">
				<img src="img/tecnologias.jpg" class="img-responsive img-rounded">
			</div>
		</div>

@endsection