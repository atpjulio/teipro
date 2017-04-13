@extends('layouts.admin')
 
@section('header')
<header>
  <div class="logo">
    <img src="img/logoTeipro.png" class="" alt="" height="100">
  </div>

  <ul class="nav nav-pills">
    <li role="presentation" class="@yield('menu6', '')"><a href="contactenos">Contáctenos</a></li>
    <li role="presentation" class="@yield('menu5', '')"><a href="casos_exito">Casos de Éxito</a></li>
    <li role="presentation" class="@yield('menu4', '')"><a href="equipo">Nuestro Equipo</a></li>
    <li role="presentation" class="@yield('menu3', '')"><a href="soluciones">Soluciones</a></li>
    <li role="presentation" class="@yield('menu2', '')"><a href="quienes_somos">Quiénes Somos</a></li>
    <li role="presentation" class="@yield('menu1', 'active')"><a href="home">Home</a></li>
  </ul>

</header>
@endsection