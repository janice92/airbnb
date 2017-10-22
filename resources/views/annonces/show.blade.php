
@extends('layouts.app')

@section('content')
  <div class="container">

   <div class="col-sm-6 col-sm-offset-3">

   <div class="panel panel-default" style="margin: 0; border-radius: 0;">

    <div class="panel-heading">
     <h3 class="panel-title">
      {{ $annonce->title }},

      <div class="pull-right">
       <a href="{{ url('/annonces') }}">Return back</a>
      </div>

     </h3>
    </div>

    <div class="panel-body">
     {{ $annonce->body }}
     @if ($annonce->image != null)
      <img src="/images/{{ $annonce->image }}" alt="Image" width="100%" height="600">
     @endif
     <br />
    </div>


      @if (Session::has('success'))
       <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
       </div>
      @endif
     </div>

    </div>

 </div>
@endsection