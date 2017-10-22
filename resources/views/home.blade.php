@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tout les membres</div>
                <form class="navbar-form navbar-left" role="search" action="{{url('home/searchredirect')}}">
 <div class="form-group">
  <input type="text" class="form-control" name='search' placeholder="chercher" />
 </div>
 <button type="submit" class="btn btn-default">recherche</button>
</form><br>
               <p style="text-align:center;">Faites la connaissance de nouveau membres de toutes les nationalités</p>
                <div class="panel-body">
                @foreach($users as $user)
                    <table class="table">
                        <tr>
                            <td>
                                <img src="{{URL::asset('../')}}/img/{{$user->pic}}" width="100px" height="100px" class="img-circle"/>
                                {{$user->name}}
                                <p><i class="fa fa-globe"></i> {{$user->profile->city}}  - {{$user->profile->country}}</p>
                                <p>{{$user->profile->about}}</p>
                            </td>
                            <td>
                                <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Envoyer un message</a>
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
