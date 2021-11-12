@extends('layouts.app')
@section('title', 'Mostrar datos')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-1g shadow-lg">
    <h1 class="text-3xl text-center font-bold" >VER MIS DATOS</h1>
    <p><strong>Nombre: {{$user->name}} </strong></p>
    <p><strong>Correo: {{$user->email}} </strong></p>    
    <p><strong>Celular: {{$user->celular}} </strong></p>
    <p><strong>Cedula: {{$user->cedula}} </strong></p>
    <p><strong>Fecha de Nacimiento: {{$user->f_nacimiento}} </strong></p>
    <p><strong>Cod Ciudad: {{$user->cod_ciudad}} </strong></p>
@endsection    
