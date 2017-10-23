@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Toutes les annonces</div>
                <form class="navbar-form navbar-left" role="search" action="{{url('home/searchredirect')}}">
 <div class="form-group">
  <input type="text" class="form-control" name='search' placeholder="chercher" />
 </div>
 <button type="submit" class="btn btn-default">recherche</button>
</form><br>
               <p style="text-align:center;">trouver l'appartement qui vous convient</p>
                <div class="panel-body">
                @foreach($annonces as $annonce)
                    <table class="table">
                        <tr>
                            <td>
                                <img src="/images/{{ $annonce->image }}" width="100px" height="100px" class="img-responsives"/>
                                {{$annonce->title}}
                                <p><i class="fa fa-globe"></i> posté par {{ $annonce->user->name }}  </p>
                                <p>{{$annonce->body}}</p>
                            </td>
                            <td>
                                <a href="{{ route('annonce.show', [$annonce->id]) }}" class="btn btn-success pull-right">voir l'annonce</a>
                            </td>
                        </tr>
                    </table>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
