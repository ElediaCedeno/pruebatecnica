@extends('layouts.app')
@section('title', 'Mail')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-1g shadow-lg">
        <h1 class="text-3xl text-center font-bold">Enviar Correo</h1>        
    <form class="mt-4"  action="{{route('email.store')}}" method="POST">
        @csrf
    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="destinatario" id="destinatario" name="destinatario">
    
    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="asunto" id="asunto" name="asunto">
    
    <textarea type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-1g placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Mensaje" id="mensaje" name="mensaje">
    </textarea>
    <button type="submit" class="rounded-md bg-indigo-500 w-full text-1g
    text white font-semibold p-2 my-3 hover:bg-indigo-600 focus">Enviar</button>
    </form>
    </div>
@endsection