@extends('layouts.app')
@section('title', 'Usuario')
    
@section('content')
    <div class="container">
        <h4>ADMINISTRACIÓN DE USUARIOS</h4>
        <div class="row">
            
            <div class="col-xl-12">
                <form action="{{route('user.index')}}" method="GET">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-4 my-l">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div> 
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                    </div>
                    <div class="col-auto my-1">
                        <a href="{{route('user.create')}}" class="btn btn-success">Nuevo</a>
                    </div>

                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Cedula</th>
                                <th>Edad</th>
                                <th>Cod Ciudad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($user)<=0)
                            <tr>
                                <th colspan="8">No hay resultados</th>
                            </tr>
                        @else        
                        @foreach ($user as $users)
                        <tr>
                            <th>{{$users->id}}</th>
                            <th>{{$users->name}}</th>
                            <th>{{$users->email}}</th>
                            <th>{{$users->celular}}</th>
                            <th>{{$users->cedula}}</th>
                            <th>{{$users->f_nacimiento}}</th>
                            <th>{{$users->cod_ciudad}}</th>
                            <th class="center"><a href="{{route('user.edit', $users->id)}}" class="btn btn-warning btn-sm">EDITAR</a>
                                |<form action="{{route('user.destroy', $users->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"> 
                                </form>
                                |<!--<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$users->id}}">
                                    Eliminar
                                  </button>-->
                            </th>
                        </tr>
                        @endforeach
                        @endif    
                        </tbody>
                    </table>
                    {{$user->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
