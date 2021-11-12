@extends('layouts.app')
@section('title', 'Registro')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-1g shadow-lg">
    <h1 class="text-3xl text-center font-bold">Editar Usuario</h1>    
    <form class="mt-4"  action="{{route('user.update', $user->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"  name="email" value="{{$user->email}}" disabled>
        
        @error('email')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror
        
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"  name="password" value="{{$user->password}}">
        
        @error('password')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Repeat Password"  name="password1">        

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name"  name="name" value="{{$user->name}}">
        
        @error('name')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Celular"  name="celular" value="{{$user->celular}}">
        
        @error('celular')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <input type="numeric" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Cedula"  name="cedula" value="{{$user->cedula}}" disabled>

        @error('cedula')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <input type="date" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Fecha de Nacimiento"  name="f_nacimiento" value="{{$user->f_nacimiento}}">
        @error('f_nacimiento')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror
        <input type="numeric" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Código de Ciudad"  name="cod_ciudad" value="{{$user->cod_ciudad}}">
        @error('cod_ciudad')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Rol de Usuario"  name="rol" id="rol">
        @error('rol')
        <p class="border border-red-500 rounded md bg-red-100 w-full
        text-red-600">*{{$message}}
        </p>   
        @enderror

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-1g
        text white font-semibold p-2 my-3 hover:bg-indigo-600 focus">Log in</button>
    
    </form>    
@endsection    
