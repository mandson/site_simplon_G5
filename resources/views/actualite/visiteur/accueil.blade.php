<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/styles.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/bootstrap.min.css') }}" />
    <script src="{{ asset('Js/bootstrap.min.js') }}"></script>
    <style>footer {
    margin-top: 50px;
    width: 100%;
    margin-left: 0%;
}
.hauteur{
height:400px!important;

}
</style>
</head>
<body class="container">
    <div class="row rowg">
        <div class="col-md-8 ">
            <a href="#" class="lienG haut">A&nbsppropos</a>
            <a href="allumnis" class="lienG haut">Notre&nbspréseau&nbspd'allumnis</a>
            <a href="evenements" class="lienG haut">Évènements</a>
        </div>
        <div class="col-md-4">
            <a href="#" class="lienG haut"><img src="{{ asset('image/face.png') }}" alt="Facebook" width="30px;"></a>
            <a href="#" class="lienG haut"><img src="{{ asset('image/twitter.png') }}" alt="Twitter" width="30px;"></a>
            <a href="#" class="lienG haut"><img src="{{ asset('image/link.png') }}" alt="LinkedIn" width="30px;"></a>
        </div>
    </div>    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href=""> <img src="{{ asset('image/logosimplon.png') }}" width="290px"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link lienB " href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link lienB" id="actu" href="vi_actualite">Actualités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link lienB" href="vi_apprenants" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portrait&nbspApprenants
                </a>
            </li>
            </ul>
        </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-image" type="submit"><img src="{{ asset('image/search.png') }}" alt="Search" width="20px;"></button>
            </form>
        </nav>
    </header>
    <section class="ban"></section>
    <div class="starter-template" style="padding-top: 30px;">
     <br><br> <br><hr>
      
   
  
  <div>

  <div class="card-group border border-warning m-5">
  <div class="card  card text-primary bg-light  ">
  <div class="card-header">SIMPLON</div>
    <div class="card-body">
      <h5 class="card-title">QUI SOMMES NOUS?</h5>
      <p class="card-text">Simplon.co est un réseau de Fabriques solidaires et inclusives qui proposent des formations gratuites aux métiers techniques du numérique en France et à l’étranger</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card">
  <div class="card-header">Notre impact </div>
    <div class="card-body">
      <h5 class="card-title">UNE REVOLUTION NUMERIQUE</h5>
      <p class="card-text"> 7 848 

Simploniens dans le monde <br>


102

Fabriques dans le monde

72 % <br>

De sorties positives après la formation </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card card  card text-primary bg-light ">
  <div class="card-header">Depuis 7ansr</div>
    <div class="card-body">
      <h5 class="card-title">Simplon a 7 ans et a formé 7 848 apprenant.es !</h5>
      <p class="card-text">Avec nos actions, nous mettons le numérique au service de l’intérêt général et à la portée de tout.es, afin d’en faire un levier d’inclusion. Cette année, nous avons formé 80% de demandeur.ses d’emploi en France et 69% à l’international ; 61% de personnes avec un niveau de diplôme infra-bac ou bac (niveau 2 ou 3) en France et 46% à l’international. 

  </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<hr>



<!-- //*******************contenue************************/ -->
 
 
  



   <div class="container">
  


  <div class="row">
    <div class="col-7"><h2><b class="ml-2 pl-5" >IMAGES ACTUALITE </b></h2>
    <div class="card-body ">  <div> @foreach($data as $row) 
      <div class="hauteur" >  <img src="store_actualite/fetch_image/{{ $row->id }}" class="card-img-top  hauteur " alt="..."></div>
       <div> <h5 class="card-title"> {{ $row->actu_titre }}</h5></div>
     <div> <p class="card-text"> {{ $row->actu_description }}</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></div>
      @endforeach</div>
    </div>

    </div class="border border-success" >
                 
    <div class="col-5 border border-success bg bg-light"><h2><b class="ml-2 pl-5" >EVENEMENTS</b></h2> <div class="card-body ">  <div class="border " > @foreach($data as $row)
    <div> <h5 class="card-title"> {{ $row->even_description }}</h5></div>
      <div class="hauteur" >  <marquee behavior="" direction=""><img src="store_evenements/fetch_image/{{ $row->id }}" class="card-img-top  hauteur " alt="..."></marquee></div>
       
          <br><br> <hr>
      @endforeach</div>
    </div>
  </div>
</div>
  

<div>

 <footer class="">
        <section class="sect">
            <div class="row">
                <div class="col-md-8">
                    <span class="spn">Suivez nous:</span>
                </div>
                <div class="col-md-4">                    
                <a href="#" class="lienG haut"><img src="{{ asset('image/face.png') }}" alt="Facebook" width="30px;"></a>
                <a href="#" class="lienG haut"><img src="{{ asset('image/twitter.png') }}" alt="Twitter" width="30px;"></a>
                <a href="#" class="lienG haut"><img src="{{ asset('image/link.png') }}" alt="LinkedIn" width="30px;"></a>
                </div>
            </div>
        </section>
        <section class="sect">
            <div class="row">
                <div class="col-md-4">
                    <p><a href="actualites">Actualités</a></p>
                    <p><a href="evenements">Évènements</a></p>
                    <p><a href="#">Histoire&nbspde&nbspsimplon</a></p>
                </div>
                <div class="col-md-4">
                    <p><a href="apprenants">Portraits&nbspdes&nbspapprenants</a></p>
                    <p><a href="allumnis">Réseau&nbspdes&nbspallumnis</a></p>
                    <p><a href="#">Plan&nbspdu&nbspsite</a></p>
                </div>
                <div class="col-md-4">
                    <p><a href="contacts">Contacts</a></p>
                    <p><a href="#">À&nbsppropos</a></p>
                </div>
            </div>
        </section>
        <section>
            <div class="row card text-center cardG">
                <div class=" card1">                
                    <a class="navbar-brand" href=""> <img src="{{ asset('image/logosimplon.png') }}" width="100px"> </a>
                    <span>&#9400;copyright 2020&nbsp;-&nbsp;Tous droits reservés</span>
                </div>
            </div> 
        </section>
    </footer>
</div>
    
</body>
</html>

