@extends('layouts.app')

@section('content')
<h3>Resulta de la recherche {{$search}}</h3>
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
            $user = App\User::select()->where('id', 'email','name', $user->id_user)->first();
        ?>
   
           


              

   
                <?php $modal++ ?>
             
        
        <hr />
        <?php endforeach ?>
@endif
@stop