 @extends('layouts.admin')
 
 @section('header')
  		<div class="container-fluid fondoHeader">
  		<img src="img/logoTeipro.png" class="img-responsive" alt="" height="37" width="269">
			<nav class="navbar navbar-default row" role="navigation">
  			<!-- El logotipo y el icono que despliega el menú se agrupan
       		para mostrarlos mejor en los dispositivos móviles -->
	  		<div class="navbar-header container-fluid">
    			<button type="button" class="navbar-toggle" data-toggle="collapse"
        	    data-target=".navbar-ex1-collapse">
				    <span class="sr-only">Desplegar navegación</span>
      				<span class="icon-bar"></span>
	      			<span class="icon-bar"></span>
    	  			<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="#"></a>
	  		</div>
		  	<!-- Agrupar los enlaces de navegación, los formularios y cualquier
    		otro elemento que se pueda ocultar al minimizar la barra -->
  			<div class="collapse navbar-collapse navbar-ex1-collapse">
    			<ul class="nav navbar-nav navbar-right">
	      			<li class="@yield('menu1', 'active')"><a href="home">Home</a></li>
      				<li class="@yield('menu2', '')"><a href="quienes_somos">Quiénes Somos</a></li>
      				<li class="@yield('menu3', '')"><a href="soluciones">Soluciones</a></li>
      				<li class="@yield('menu4', '')"><a href="equipo">Nuestro Equipo</a></li>
      				<li class="@yield('menu5', '')"><a href="casos_exito">Casos de Éxito</a></li>
    	  			<li class="@yield('menu6', '')"><a href="contactenos">Contáctenos</a></li>
	    		</ul>
  			</div>
			</nav>
		</div>
@endsection