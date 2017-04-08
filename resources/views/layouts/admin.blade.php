<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'TEIPRO Colombia SAS')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Jura|Ruda" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<!-- Seccion del Body -->
<body>
<div id="wrap">
	<!-- Contenido del header...................................... -->
  	<div id="header">
  		<div class="container-fluid fondoHeader">
  		<img src="img/logo.png" class="img-responsive" alt="">
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
	</div>
	<!-- Contenido del content..................................... -->
   	<div id="content" class="fondoContent">
   		@yield('contenido')
   	</div>
</div>

<div id="footer">
  @include('layouts.pie')
</div>

    <!-- jQuery 2.1.4 -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    @yield('eventos')
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>