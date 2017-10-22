

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-0">

            @if(Session::has('success'))
           <div class="alert alert-success">
               <a href="#" class="close" data-dismiss="alert">&times;</a>
               {{Session::get('success')}}
           </div>
            @endif
            <form method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="panel1 panel-default">

                    <div class="panel-body">

                        <div class="form-groupe" {{$errors->has('title') ? 'has-error' : ''}}>
                            <input type="text" name='title' class="form-control" id="" placeholder="Ecrivez votre titre d'annonce">
                            @if($errors->has('title'))
                                <small class="text-danger">{{$errors->first('title')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-groupe" {{$errors->has('body') ? 'has-error' : ''}}>
                            <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Descritption de l'offre"></textarea>
                            @if($errors->has('body'))
                                <small class="text-danger">{{$errors->first('body')}}</small>
                            @endif
                        </div>
                        <input type="submit" value="Envoyer l'annonce" class="btn btn-primary btn-block">
                    </div>
                </div>

            </form>

            @foreach($annonces as $annonce )
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{$annonce->title}}
                    </h3>
                </div>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('annonce.show', [$annonce->id]) }}">Voir l'annonce</a> </li>
                        <li><a href="{{ route('annonce.edit', [$annonce->id]) }}">Modifier l'Annonce</a> </li>
                        <li>
                            <a href="#" onclick="document.getElementById('delete').submit()">Supprimer l'Annonce</a>
                            {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['annonce.delete', $annonce->id]]) !!}
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>

                <div class="panel-body">
                    {{$annonce->body}}
                    @if($annonce->image != null)
                        <img src="/images/{{$annonce->image }}" alt="Image" width="100%" height="600">
                    @endif
                </div>

                <div class="panel-footer">
                    <a href="#" class="btn btn-link">Postuler pour l'annonce</a>
                    <a href="#" class="btn btn-link">Commenter</a>
                </div>
            @endforeach

        </div>

    </div>

@endsection