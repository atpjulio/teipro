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
	<div>
		<br>
		<form class="form-horizontal">
  			<div class="form-group">
    			<label for="inputNombre" class="col-sm-2 control-label">Nombre y Apellido</label>
    			<div class="col-sm-3">
    				<input type="text" class="form-control" id="inputUsuario" placeholder="Nombre y Apellido">
    			</div>
    			<label for="inputEmail" class="col-sm-1 control-label">E-mail</label>
    			<div class="col-sm-3">
	    			<input type="email" class="form-control" id="inputEmail" placeholder="ejemplo@tucorreo.com">
	    		</div>
    			<label for="inputNombre" class="col-sm-1 control-label">Celular</label>
    			<div class="col-sm-2">
    				<input type="text" class="form-control" id="inputUsuario" placeholder="300-0000000">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="inputAsunto" class="col-sm-3 control-label">Asunto</label>
    			<div class="col-sm-5">
	    			<input type="text" class="form-control" id="inputAsunto" placeholder="Asunto">
	    		</div>
  			</div>
  			<div class="form-group">
    			<label for="inputMensaje" class="col-sm-3 control-label">Mensaje</label>
    			<div class="col-sm-5">
	    			<textarea class="form-control" rows="3" id="inputMensaje" placeholder="Cuéntanos tu consulta">
            </textarea>
	    		</div>
  			</div>
  			<div class="form-group">
  				<div class="col-sm-offset-3 col-sm-10">
					<button type="button" class="btn btn-success">Enviar</button>
				</div>
  			</div>
		</form>				
	</div>
</div>

@endsection