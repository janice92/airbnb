@extends('layouts.app')

@section('content')
    <div class="container">
           @include('profile.sidebar')
        <div class="col-sm-8">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <input type="text" name="title" class="form-control" placeholder="Enter your annonce title">
                            @if ($errors->has('title'))
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                          <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Enter your annonce"></textarea>
                            @if ($errors->has('body'))
                                <small class="text-danger">{{ $errors->first('body') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                          
                        </div>
                        <input type="submit" value="post" class="btn btn-primary btn-block">
                    </div>
                </div>
            </form>

            @foreach ($annonces as $annonce)
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                        posté par {{ $annonce->user->name }}, {{ $annonce->title }}
                        <div class="pull-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('annonce.show', [$annonce->id]) }}">voir l' annonce</a></li>
                                    <li><a href="{{ route('annonce.edit', [$annonce->id]) }}">modifier annonce</a></li>
                                    <li>
                                        <a href="#" onclick="document.getElementById('delete').submit()">supprimé annonce</a>
                                        {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['annonce.delete', $annonce->id]]) !!}
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </div>
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
                  <div class="panel-footer" data-postid="{{ $annonce->id }}">
                     
                      <a href="{{ route('annonce.show', [$annonce->id]) }}" class="btn btn-link">Comment</a>
                  </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-3">
           
        </div>
    </div>
@endsection