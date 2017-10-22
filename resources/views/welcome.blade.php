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


    <div class="container">
        <h1 class="heading-primary" style="color:#555;">Informations importantes</h1>
        <div class="accordion">
            <dl>
                <dt>
                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Qu'est-ce qu'un au pair ?</a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                    <p>Les jeunes au pair sont des jeunes gens entre 18 et 30 ans, célibataires et sans enfants, qui partent vivre pour un temps
                        limité chez une famille d'accueil à l'étranger afin d'approfondir leurs connaissances linguistiques et culturelles.
                        Le jeune au pair peut améliorer ses connaissances linguistiques dans la famille d'accueil, découvrir une autre culture et
                        acquérir une expérience à l'étranger. En échange, le jeune au pair aide sa famille d'accueil en gardant les enfants et
                        apporte un soutien dans les tâches ménagères légères.</p>
                <dt>
                    <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                        Temps de travail du jeune au pair</a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                    <p>Dans de nombreux pays d'accueil, le temps de travail maximal des jeunes au pair est fixé par la législation en vigueur.
                        En règle générale, nous recommandons que le jeune au pair ne travaille pas plus de 30 heures par semaine (babysitting inclus) ;
                        exception faite des États-Unis, où les jeunes au pair travaillent maximum 45 heures par semaine.</p>

                    <p>Concernant le temps de travail, une certaine flexibilité est demandée aux deux parties.
                        Il peut arriver que le jeune au pair soit amené à garder les enfants un peu plus longtemps que prévu ;
                        il recevra en échange un week-end entier de libre..</p>
                </dd>
                <dt>
                    <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                        Durée d'un séjour au pair </a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                    <p>Un séjour au pair est toujours limité dans le temps. La plupart des jeunes au pair restent au maximum
                        une année dans une même famille. S'il n'existe pas de réglementation à ce sujet dans un pays d'accueil donné,
                        la durée du séjour est à convenir ensemble.
                        Il existe par exemple des jeunes au pair qui cherchent une famille d'accueil pendant leurs vacances d'été.</p>

                </dd>
            </dl>
            
        </div>
        
        <script>
            (function(){
                var d = document,
                        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
                        setAria,
                        setAccordionAria,
                        switchAccordion,
                        touchSupported = ('ontouchstart' in window),
                        pointerSupported = ('pointerdown' in window);

                skipClickDelay = function(e){
                    e.preventDefault();
                    e.target.click();
                }

                setAriaAttr = function(el, ariaType, newProperty){
                    el.setAttribute(ariaType, newProperty);
                };
                setAccordionAria = function(el1, el2, expanded){
                    switch(expanded) {
                        case "true":
                            setAriaAttr(el1, 'aria-expanded', 'true');
                            setAriaAttr(el2, 'aria-hidden', 'false');
                            break;
                        case "false":
                            setAriaAttr(el1, 'aria-expanded', 'false');
                            setAriaAttr(el2, 'aria-hidden', 'true');
                            break;
                        default:
                            break;
                    }
                };
//function
                switchAccordion = function(e) {
                    console.log("triggered");
                    e.preventDefault();
                    var thisAnswer = e.target.parentNode.nextElementSibling;
                    var thisQuestion = e.target;
                    if(thisAnswer.classList.contains('is-collapsed')) {
                        setAccordionAria(thisQuestion, thisAnswer, 'true');
                    } else {
                        setAccordionAria(thisQuestion, thisAnswer, 'false');
                    }
                    thisQuestion.classList.toggle('is-collapsed');
                    thisQuestion.classList.toggle('is-expanded');
                    thisAnswer.classList.toggle('is-collapsed');
                    thisAnswer.classList.toggle('is-expanded');

                    thisAnswer.classList.toggle('animateIn');
                };
                for (var i=0,len=accordionToggles.length; i<len; i++) {
                    if(touchSupported) {
                        accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
                    }
                    if(pointerSupported){
                        accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
                    }
                    accordionToggles[i].addEventListener('click', switchAccordion, false);
                }
            })();
        </script>
    </div>




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
                 <p class="copyright text-muted">Fait par Mette Janice & Le Pape Anne-Hélène - Lize</p>
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
