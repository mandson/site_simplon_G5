@extends('actualite/visiteur/vi_layout')
<hr>
<style>

.image{
    height:350px;
    width:70% !important;
}
  
  .hauteur2{
    height:300px;
  }
</style>
@section('content_vi')









<div class="container">
  

<!-- /**********************************Espace de de gauche***********************- -->
  <div class="row">
    
    <div class="col-7">
        <h2><b class="ml-2 pl-5" >LES ACTUALITES DU MOIS</b></h2>
    <div class="card-body ">  <div> @foreach($data as $row)
      <div class="hauteur" >  <img src="store_actualite/fetch_image/{{ $row->id }}" class="card-img-top  hauteur " alt="..."></div>
       <div> <h5 class="card-title"> {{ $row->actu_titre }}</h5></div>
      <p class="card-text"> {{ $row->actu_description }}    </p>
      <p class="card-text"><small class="text-muted"> {{ $row->actu_updated_at }} </small></p> <hr>
      @endforeach</div>
    </div>

<!-- /**********************************Espace de droite***********************- -->
    </div>
    <div class="col-5 border border-success bg bg-light"><h2><b class="ml-2 pl-5" >EVENEMENT_IMAGE</b></h2> <div class="card-body ">  <div class="border " > @foreach($data as $row)</div>
    
      <div class="hauteur" >  <marquee behavior="" direction=""><img src="store_evenements/fetch_image/{{ $row->id }}" class="card-img-top  hauteur " alt="..."></marquee></div>
       
          <br><br> <hr>
      @endforeach</div>
    </div>
  </div>
</div>
  




  
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
@endsection
</div>

