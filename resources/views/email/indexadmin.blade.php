<?php use Carbon\Carbon;?>
@extends('layouts.app')
@section('title', 'Usuario')
    
@section('content')
    <div class="container">
        <h4>ADMINISTRACIÓN DE USUARIOS</h4>
        <div class="col-auto my-1">
            <a href="{{route('email.create')}}" class="btn btn-success">Nuevo</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Destinatario</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($mail)<=0)
                            <tr>
                                <th colspan="8">No hay resultados</th>
                            </tr>
                        @else        
                        @foreach ($mail as $mails)
                        <tr>
                            <th>{{$mails->id}}</th>
                            <th>{{$mails->destinatario}}</th>
                            <th>{{$mails->asunto}}</th>
                            <th>{{$mails->mensaje}}</th>
                            @if (DB::table('jobs')->select('id')->where('id',$mails->id_job )==false)
                            <th>Enviado</th>
                            @else
                            <th>No enviado</th>
                            @endif
                         </tr>
                        @endforeach
                        @endif    
                        </tbody>
                    </table>
                    {{$mail->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
