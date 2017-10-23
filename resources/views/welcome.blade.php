<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

        <title>Lize</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
  <title>Animated Fixed Navbar with Scrolling</title>
  
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('js/index.js') }}">

  
</head>
   <header> <!-- I used some style code in HTML, remove it for display Bootstrap default options -->
<nav class="navigation nav-color">
<img src="{{URL::asset('../')}}/img/logo-coloc-fb.png" width="70px" height="70px" id="logo" class="img-responsive"/>
<div class="container-fluid">

            <div class="nav navbar-nav navbar-left">

            <a class="navbar-brand navbar-link" href="#">
                    @if (Route::has('login'))
                            @if (Auth::check())
                                <a href="{{url('/profile')}}/{{Auth::user()->slug}}">Profil</a>
                            @else
                                <a href="{{ url('/login') }}">Connexion</a> |
                                <a href="{{ url('/register') }}">Inscription</a>
                            @endif
                    @endif
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/register') }}">Espace Locataire</a></li>
                <li><a href="{{ url('/register') }}">Espace Proprietaire</a></li>
                    <li><a href="{{ url('/feed') }}">Annonces</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
</nav>
<div class="opak">
<div class="container">
            <div class="row" style="margin-top:232px;">
                <div class="col-md-12">
                    <h1 class="text-center" data-aos="fade-right" data-aos-duration="3000"><strong>Colo'K</strong></h1>
                    <p class="lead text-center2" data-aos="fade-left" data-aos-duration="3000"><em>Décrocher toutes les oportunités du monde</em> </p>

                </div>
            </div>
          
            <div class="buton"><a href="{{ url('/home') }}"role="button" style="color:white;">Découvrir!</a></div>
        </div>
        </div>
        </header>

<body>
  


        

    <section id="content2-3" class="content2-3" style="background-color: #fff">
        <div class="container">
       
                    <h2>Lancez-vous dans l’aventure Vivez en colocation !</h2>
                
  <div class="container2">        
<div class="row">
<div class="col-md-6">
      <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>Un large choix de jeunes au pair et familles d'accueil sur Internet</p> 
      <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>La possibilité de contacter d'autres utilisateurs dès l'enregistrement</p> 
       <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>Une recherche facile sur mesure</p> 
        </div>
        <div class="col-md-6">
        <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>Un travail assuré et des congés payés</p> 
      <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>La prise en charge de votre billet d'avion et de votre logement</p> 
       <p class="dark"><span><img src="{{URL::asset('../')}}/img/check-mark.png" /></span>La construction d'une relation inoubliable avec les enfants et votre famille d'accueil</p> 
        </div>
        </div>
      
        </div>    
        </div>
    </section>
    <section id="suite">
        <div class="container">
            <h3>Comment ça marche</h3>
          <div class="container">
            <p class="dark">Des rencontres formidables avec des Au Pairs du monde entier et des étudiants du monde entier</p>
            <hr>
            <div class="row">
            <div class="col-md-4">
            <img src="{{URL::asset('../')}}/img/curriculum.png" />
            <h5>1.Créer votre profil</h5>
            <p class="dark">Enregistrez-vous gratuitement en tant qu'au pair ou famille d'accueil, entrez vos critères de recherche et ajoutez vos textes et photos.</p>
            </div>
             <div class="col-md-4">
             <img src="{{URL::asset('../')}}/img/search.png" />
             <h5>2.Rechercher</h5>
            <p class="dark">Trouvez des profils adéquats , qui se base sur vos critères de recherche que vous avez défini pendant l'enregistrement.</p>
             </div>
              <div class="col-md-4">
             <img src="{{URL::asset('../')}}/img/certificate.png" />
             <h5>3.Conclure un contrat</h5>
            <p class="dark">Clarifiez les détails de l'arrivée du jeune : quand arrive-t-il ? Qui ira le chercher ? Comment vous joindrez-vous en cas d'imprévus </p>
             </div>
             </div>
             </div>
        </div>
    </section>
    <section class="content6">
        <div class="container">
        <div class="row">
                <div class="col-md-6">
                    <img src="{{URL::asset('../')}}/img/family.jpg" width="500px" height="500px" id="" class="img-responsive"/>
                </div>
                <div class="col-md-6"><img src="{{URL::asset('../')}}/img/fille.jpg" width="500px" height="500px" id="" class="img-responsive"/></div>
            </div>
            </div>
    </section>
<section id="content3">
    <div class="container">
    <h3>Informations pratique</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="box">
                    <div class="box-icon">
                        <span class="fa fa-4x fa-css3"></span>
                    </div>
                    <div class="info">
                        <h3>Important pour ton voyage : </h3>
                        <p>Fais bien attention à tes documents pendant ton voyage. Ton passeport ou ta carte d'identité sont des documents très importants.
                            Ne les donne donc à personne sous aucun prétexte. Même ta famille d'accueil peut se contenter d'une copie. Prends aussi assez
                            d'argent avec toi, ainsi que tous les numéros de téléphone importants,
                            par exemple celui de ta famille d'accueil et celui de ton ambassade. Tu es ainsi paré(e) à toutes les éventualités.</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="box">
                    <div class="box-icon">
                        <span class="fa fa-4x fa-css3"></span>
                    </div>
                    <div class="info">
                        <h3>Pendant le séjour : parler ensemble aide</h3>
                        <p>Une fois arrivé(e) dans ta famille d'accueil, parle beaucoup et souvent avec elle. Si tu as besoin de précisions sur
                            quelque chose ou si quelque chose te dérange, parle-en à ta famille d'accueil. Le plus souvent,
                            il ne s'agit que d'un malentendu ou d'une différence culturelle qui peuvent se régler par une simple conversation.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section>

    <section id="content4" class="content4" style="background-color: #228de3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                    <h4> Partez à l'aventure dès maintenant !</h4>
                    <a href="#" class="btn btn-default" role="button">s'inscrire</a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    



    <footer id="footer" class="footer" style="background-color: #222e41">

        <div class="item dark">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                         
<h6><span><img src="{{URL::asset('../')}}/img/logo.png" width="40px" height="40px"  class="img-responsive"/></span>Lize</h6>
                        <p>Lorem ipsum dolor sit amet,
consectetur adipi sicing elit, sed
do lab ore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-3"><h6>lien utiles</h6></div>
                    <div class="col-md-3"><h6>Nous contacter</h6>
                     <p class="white"><span><img src="{{URL::asset('../')}}/img/maill.png" /></span>message@contact.com</p> 
      <p class="white"><span><img src="{{URL::asset('../')}}/img/phone.png" /></span>008-999-767</p> 
       <p class="white"><span><img src="{{URL::asset('../')}}/img/place.png" /></span>8500 Lorem Street</p> 
   </div>
                    <div class="col-md-3"><h6>à propos</h6></div>
                </div><!-- /.row -->
                 <p class="copyright text-muted">Fait par Mette Janice & melanie - Lize</p>
            </div>

        </div><!-- /.item -->

    </footer><!-- /.footerWrapper -->



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script> <!-- pleae make sure, you have the JS code in youre JS file for animation effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script> <!-- Important for animation -->
        <script type="text/javascript">

        </script>
    </body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
