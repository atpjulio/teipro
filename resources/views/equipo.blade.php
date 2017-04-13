@extends('layouts.header')

@section('titulo')
{{ 'Nuestro Equipo | TEIPRO' }}
@endsection

@section('eventos')
<script type="text/javascript">
	$('#wrap').css('min-height', '110%');
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons
    });
    $( "#toggle" ).button().on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
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

<div class="container-fluid">
	<div class="text-center tituloCentrado">
		Nuestro Equipo
	</div>
	<div id="accordion">
  		<h3>Director General - Jhonathan Posada</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
  		</div>
  		<h3>Directora de Marketing - Tanya Socarrás</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
  		</div>
	  	<h3>Contador y Revisor Fiscal - Javier Fontalvo</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<ul>
      			<li>List item one</li>
      			<li>List item two</li>
      			<li>List item three</li>
    		</ul>
  		</div>
  		<h3>Asistente Administrativo - Laura Moreno</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Diseñador Mecánico - David Serge</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Programador de Software y Hardware- Julio Amaya</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Asesor en Sistemas Embebidos - Antonio Serrano</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Técnico Multiservicios - Ulises Quiroz</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Coordinador de Servicios - Julio Morón</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
    		<p>
    			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    			inceptos himenaeos.
    		</p>
  		</div>
  		<h3>Técnico Electro-Mecánico - Isaac Jiménez</h3>
  		<div>
    		<p>
	  			<img src="img/imagen_integrante.png" height="100" style="display: inline-block;">
				<strong>Ing. Jhonathan A. Posada Cáceres </strong>
				<i>M.Sc con énfasis en Automatización, Robótica y Control</i><br>
    			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
	    		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    		</p>
  		</div>
	</div>
</div>
@endsection

