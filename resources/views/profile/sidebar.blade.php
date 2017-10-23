<div class="col-md-3 left-sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">Sidebar - Quick Links</div>

                @if(Auth::check())
                   <ul>
                     <li>
                       <a href="{{ url('/profile') }}/{{Auth::user()->slug}}">
                          <img src="{{URL::asset('../')}}/img/{{Auth::user()->pic}}"
                       width="32" style="margin:5px" class="img-circle" />
                       {{Auth::user()->name}}</a>
                     </li>
                     <li>
                       <a href="{{url('/annonces')}}"> <img src="{{Config::get('app.url')}}/public/img/news_feed.png"
                       width="32" style="margin:5px"  />
                      Posté une annonce</a>
                     </li>
                     <li>
                       <a href="{{url('/home')}}"> <img src="{{Config::get('app.url')}}/public/img/friends.png"
                       width="32" style="margin:5px"  />
                       Toutes les Annonces</a>
                     </li>

                     <li>
                       <a href="{{url('/')}}"> <img src="{{Config::get('app.url')}}/public/img/jobs.png"
                       width="32" style="margin:5px"  />
                      Page d'Accueil</a>
                     </li>
                   </ul>
                   @endif
            </div>
        </div>