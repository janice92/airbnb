@extends('layouts.app')

@section('content')
<h1>liste des taches</h1>
<ul>
@forelse ($tasks as $task)
<li>{{ $task->title}},
utilisateur: {{ $task->user->name}}</li>
@empty
<li>aucune tache</li>
@endforelse
</ul>
<h1>formulaire</h1>
@if (count($errors) >0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>

@endforeach
 </ul>
 @endif
  <form action="{{url('/task')}}" method="post">
    {{csrf_fiel()}}
    <input type="text" name="title" placeholder="titre">
    <br>
    <textarea name="body" id="" cols="30" row="10"></textarea>
    <br>
    <input type="submit" value="envoyer">
 </form>
@endsection
