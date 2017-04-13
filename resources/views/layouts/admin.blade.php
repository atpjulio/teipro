<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo', 'TEIPRO Colombia SAS')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<!-- Seccion del Body -->
<body>
<div id="wrap">
	<!-- Contenido del header...................................... -->
  <div id="header">
  @yield('header')
	</div>
	<!-- Contenido del content..................................... -->
   	<div id="content">
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