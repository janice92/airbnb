
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/select2.css">
    <script src="/js/select2.js"></script>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif
            {!! Form::model($annonce, ['method' => 'PUT', 'files' => true, 'route' => ['annonce.update', $annonce->id]]) !!}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                            @if ($errors->has('title'))
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter your post body']) }}
                            @if ($errors->has('body'))
                                <small class="text-danger">{{ $errors->first('body') }}</small>
                            @endif
                        </div>


                        <input type="submit" value="Post" class="btn btn-primary btn-block">
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
   <script type="text/javascript">
        $('.select2-class').select2();
    </script>
@endsection