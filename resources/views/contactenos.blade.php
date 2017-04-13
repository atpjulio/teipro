@extends('layouts.header')

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
<div class="container-fluid row">
	<div class="text-center tituloCentrado">
		Contáctenos TEIPRO Colombia
	</div>
	<div class="col-sm-4">
    <div class="tituloCentrado">
      TEIPRO COLOMBIA SAS
    </div>
    <div class="textoContenido">
      TEIPRO COLOMBIA SAS<br>
      NIT: 901031607 – 1 Régimen Común<br>
      DIRECCIÓN: Calle 69F N 41-105 – Barranquilla. Tel.: 3694381<br>
      EMAIL: <a href="mailto:director@teipro.com.co" style="color:black;">director@teipro.com.co</a>
    </div>
    <div class="tituloCentrado">
      Director de Proyectos
    </div>
    <div class="textoContenido">
      Ing. Jhonathan A. Posada Cáceres<br>
      M.Sc con énfasis en Automatización, Robótica y Control<br>
      CEL: (+57) 3014442104
    </div>
    <br><br>
    <img src="img/logoTeipro.png" class="center-block" alt="" height="80">
	</div>
  <div class="col-sm-8">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6668286727254!2d-74.80726868590455!3d10.988501058249774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d12a5d98ed7%3A0xa64f01eee7e0c333!2sCl.+69f+%2341-105%2C+Barranquilla%2C+Atl%C3%A1ntico%2C+Colombia!5e0!3m2!1sen!2ses!4v1492036411291" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>

@endsection