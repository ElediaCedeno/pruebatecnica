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
        <li class="mx-8">
            <p class="text-xl">Bienvenido   <b>{{auth()->user()->name}}</b></p>
        </li>
        <li>
            <a href="{{route('login.destroy')}}" class="font-bold
            py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 
            ">Logo out</a>
        </li>
        @else
            <li class="mx-6">
                <a href="{{route('login.index')}}" class="font-semibold 
                hover:bg-indigo-700 py-3 px4 rounded-md"> Log in</a>
            </li>
            <li>
                <a href="{{route('register.index')}}" class="font-semibold 
                border-2 border-white py-2 px4 rounded-md hover:bg-write
                hover:text-indigo-700"> Register</a>
            </li>
        @endif


    </ul>
</nav>
    @yield('content')    
</body>
</html>