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
                <a class="nav-link lienB " href="">Accueil<span class="sr-only">(current)</span></a>
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
        @yield('content')
    </div>
    <footer>
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
</body>
</html>

