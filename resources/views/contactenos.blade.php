@extends('layouts.admin')

@section('titulo')
{{ 'Contactenos | TEIPRO' }}
@endsection

@section('menu1'){{ '' }} @endsection
@section('menu2'){{ '' }} @endsection
@section('menu3'){{ '' }} @endsection
@section('menu4'){{ '' }} @endsection
@section('menu5'){{ '' }} @endsection
@section('menu6'){{ 'active' }} @endsection

@section('contenido')
<div class="container row">
	<div class="text-center tituloCentrado">
		Contáctenos TEIPRO Colombia
	</div>
	<div class="col-sm-8">
    <br>
    <br>
		<form class="form-horizontal">
  			<div class="form-group">
    			<label for="inputNombre" class="col-sm-3 control-label textoContenido">Nombre y Apellido</label>
    			<div class="col-sm-7">
    				<input type="text" class="form-control" id="inputUsuario" placeholder="Nombre y Apellido">
    			</div>
        </div>
        <div class="form-group">
    			<label for="inputEmail" class="col-sm-3 control-label textoContenido">E-mail</label>
    			<div class="col-sm-7">
	    			<input type="email" class="form-control" id="inputEmail" placeholder="ejemplo@tucorreo.com">
	    		</div>
        </div>
        <div class="form-group">
    			<label for="inputNombre" class="col-sm-3 control-label textoContenido">Celular</label>
    			<div class="col-sm-7">
    				<input type="text" class="form-control" id="inputUsuario" placeholder="300-0000000">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="inputAsunto" class="col-sm-3 control-label textoContenido">Asunto</label>
    			<div class="col-sm-7">
	    			<input type="text" class="form-control" id="inputAsunto" placeholder="Asunto">
	    		</div>
  			</div>
  			<div class="form-group">
    			<label for="inputMensaje" class="col-sm-3 control-label textoContenido">Mensaje</label>
    			<div class="col-sm-7">
	    			<textarea class="form-control" rows="3" id="inputMensaje" placeholder="Cuéntanos tu consulta">
            </textarea>
	    		</div>
  			</div>
  			<div class="form-group">
  				<div class="col-sm-offset-6 col-sm-10">
					<button type="button" class="btn btn-success">Enviar</button>
				</div>
  			</div>
		</form>				
	</div>
  <div class="col-sm-4">
    <img src="img/logo_original.png" class="img-responsive" alt="">
    <div class="tituloCentrado">
      TEIPRO COLOMBIA SAS
    </div>
    <div class="textoContenido">
      TEIPRO COLOMBIA SAS<br>
      NIT: 901031607 – 1 Régimen Común<br>
      DIRECCIÓN: Calle 69F N 41-105 – Barranquilla. Tel.: 3694381<br>
      EMAIL: teiprocolombia@gmail.com
    </div>
    <div class="tituloCentrado">
      Director de Proyectos
    </div>
    <div class="textoContenido">
      Ing. Jhonathan A. Posada Cáceres<br>
      M.Sc con énfasis en Automatización, Robótica y Control<br>
      CEL: (+57) 3014442104
    </div>
  </div>
</div>

@endsection