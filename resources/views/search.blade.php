@extends('layouts.home')

@section('content')
<h3>Resultado de la búsqueda: {{$search}}</h3>
@if (isset($message))
<div class='bg-warning' style='padding: 20px'>
    {{$message}}
</div>
@endif
<hr />
@if (isset($users))
<?php 
        $modal = 0;
        foreach($users as $user):
            $user = App\User::select()->where('id', '=', $user->id_user)->first();
        ?>
        <div class="row">
            <div class="col-md-1">
                <img src='{{url($user->perfiles)}}' class='img-responsive' style='max-width: 60px' />
                <strong>{{$user->name}}</strong>
            </div>
            <div class='col-md-6'>
               {{$user->user}} 
               <br />
               <i>Fecha: {{$user->date}} · Hora: {{$user->time}}</i>
               
               
               @if(isset(Auth::user()->id))
               @if($user->id_user == Auth::user()->id)
               <hr />
                <!-- Botón que abre la ventana modal eliminar -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUser{{$modal}}">
                  Eliminar
                </button>

           

              

   
                <?php $modal++ ?>
               @endif
               @endif
            </div>
        </div>
        <hr />
        <?php endforeach ?>
@endif
@stop