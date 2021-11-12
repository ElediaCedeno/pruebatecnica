<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Tailwind css link-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Boostrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-gray-100 text-gray-800">
<nav class="flex py-5 bg-indigo-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
        <p class="text-2x1 font-bold">APLICACION DE PRUEBA</p>
    </div>
    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if (auth()->check())
            @if (auth()->user()->rol=='admin')
                <div class=" w-1/2 my-3">
                    <a class="text-white text-xl " href="{{route('user.store')}}"> ADMINISTRACIÓN DE USUARIOS
                </div>
                <div class="my-3">
                    <a class="text-xl text-white" href="{{route('email.indexadmin')}}"> ADMINISTRACIÓN DE MAILS
                </div>
                <div class="my-3">
                    <a class="text-xl text-white" href="{{route('auth.show')}}"> VER MIS DATOS
                </div>
                    <li class="mx-8">
                        <p class="text-xl">Bienvenido  <b>{{auth()->user()->name}}</b></p>
                    </li>
                    <li>
                        <a href="{{route('login.destroy')}}" class="font-bold
                        py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 
                        ">Salir</a>
                    </li>            
            @else
            <div class="">
                <a class="text-white text-xl" href="{{route('auth.show')}}"> VER DATOS 
        </div>
        <div class="">
            <a  class="text-white text-xl" href="{{route('email.index')}}"> ENVIO DE MAILS
        </div>
            <li class="mx-8">
                <p class="text-xl">Bienvenido   <b>{{auth()->user()->name}}</b></p>
            </li>
            <li>
                <a href="{{route('login.destroy')}}" class="font-bold
                py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 
                ">Salir</a>
            </li>
            @endif
        @else
            <li class="mx-6">
                <a class="text-white text-xl" href="{{route('login.index')}}" class="font-semibold 
                hover:bg-indigo-700 py-3 px4 rounded-md">Iniciar Sesion</a>
            </li>
        @endif
    </ul>
</nav>
    @yield('content')    
</body>
</html>