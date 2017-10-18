@extends('layouts.app')

@section('content')
<h1>formulaire</h1>
@if (count($errors) >0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>

@endforeach
 </ul>
 @endif
 <form method="POST" action="{{route('task.store')}}">
    {{csrf_fiel()}}
    <input type="text" name="title" placeholder="titre">
    <br>
    <textarea name="body" id="" cols="30" row="10"></textarea>
    <br>
    <input type="submit" value="envoyer">
 </form>
@endsection
