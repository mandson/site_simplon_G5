@extends('layout')
<style>   
           .av4{
                 background-color:red;
                 height:50px;
                 }
         </style>
@section('content')
<style>   
          
  .esapace_milieu1 {
            margin: 10%;
    margin-top: 10%;
    margin-bottom: 0;
    width: 80%;
    height: auto;
    /* border: solid 2px black; */
    background-color: white;
}
.esapace_milieu2 {
    margin: 5%;
    /* margin-top: 10%; */
    width: 100%;
  
  
    background-color: white;
}

 .marges1{
         margin-top:10%;
         margin-left:30px;
         }

         .txt1{ 
             color:black;
             margin-top:-50px;
             
         }
         .lien{
            color:black;
             margin-bottom:-20px;
             padding:0px;
         }
                  </style>
  <hr>  <br><br>
<h3>LISTE DES APPRENANTS ET ALLUMNIS PRESENT DANS NOTRE BASE DE DONNE</h3>
<br><br>
<div><ul>
@foreach(  $apprenant as  $apprenant)
 			 	
<li> <h4>Nom</h4> {{  $apprenant->nom}} <br><h4> Prenom</h4> <em class="text-muted">{{  $apprenant->prenom}}</em>  <br><h4> 	Status </h4> <em class="text-muted">{{  $apprenant->status}}</em> </li>
<!-- <li> <h4>duree_formation </h4> {{  $apprenant->duree_formation }} <br><h4> formation </h4> <em class="text-muted">{{  $apprenant->formation_suivie}}</em>   </li>

<li> <h4>lien_projet</h4> {{  $apprenant->lien_projet }} <br><h4> 	status </h4> <em class="text-muted">{{  $apprenant->status}}</em>   </li>
<li> <h4>travail</h4> {{  $apprenant->travail}} <br><h4>photo</h4> <em class="text-muted">{{  $apprenant->photo}}</em>   </li> -->

@endforeach 
</ul>
<hr></div>

<div class="row esapace_milieu1 border">
<div class="col-lg-2">simplon</div>
<div class="col-lg-8 "> 
 
 
   <div class="esapace_milieu2 " >  <h1 class="ml-2" >ADMINISTRATION>Apprenants</h1>

<form action="apprenants" method="POST" > 
@csrf
<div class="form-group">
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NOM" name="nom" >

  </div>

  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" placeholder="Entrer le prenom" name="prenom" >
  </div>

  <div class="form-group">
    <label for="age">age</label>
    <input type="text" class="form-control" id="age" placeholder="Age..." name="age" >
  </div>
<hr><br>

  <div class="form-group">
    <label for="formation">Formation suivie</label>
    <textarea class="form-control" id="formation" placeholder="Description " rows="2"  name="formation_suivie"></textarea>
  </div>

  <div class="form-group">
  <label for="exampleFormControlTextarea2">Duree de la formation</label>
<select class="custom-select  " name="duree_formation"  id="exampleFormControlTextarea2">
  <option value="1">1 mois</option>
  <option value="2">2 mois</option>
  <option value="3">3 mois</option>
  <option value="4">4 mois</option>
  <option value="5">5 mois</option>
  <option value="6">6 mois</option>
  <option value="7">7 mois</option>
  <option value="8">8 mois</option>
  <option value="9">9 mois</option>
  <option value="10">10 mois</option>
  <option value="11">11 mois</option>
  <option value="12">12 mois</option>
  <option value="+">plus de 1 ans</option>
</select> 
<div class="form-group"> <br>
    <label for="projet">Projet Realiser</label>
    <input type="text" class="form-control" id="projet" placeholder="Inserer le lien du depot github" rows="2"  name="lien_projet"></input>
  </div>
  <hr>
<div class="form-group">
  <br><label for="status">Status Actuel</label>
<select class="custom-select  " name="status"  id="status">
  <option value="Apprenants">Apprenant</option>
  <option value="Allumnis">Allumnis</option>
</select> <br>
     
    </div> 

    <div class="form-group">
    <label for="formation">Travail Actuellement a : </label>
    <textarea class="form-control" id="formation" placeholder=" Des information du le travail de l'Allumnis ou Apprenant " rows="2"  name="travail"></textarea>
  </div>

    <div> 
   <br> <label for="image"> Inserer une Photo</label> <br>
   <input class="border border-primary mt-2" type="file" id="image" name="photo" >
   </div> <br>
</div>

   <button type="submit" class="btn btn-primary border border-danger">Enregistrer</button>

   </form>
       
   </div>


</div>
<div class="col-lg-2 pl-5"></div>


</div>

<div class="row bg marges1" > 
<div class="col-lg-3  mt-3"> <p>
         </p> <h5>PARTENAIRES: </h5>
                   AUF/OUAGA <br>
                     UO1 <br>
                    SGBB      
     </div>  
     <div class="col-lg-6">  
     
        <h5><p class="txt1" > Ajout un Nouveau Apprenants <br> </p></h5>
     </div>  
     <div class="col-lg-3 mt-2"> <p>
         </p> <h5>lien utiles: </h5>
                   <a class="lien" href="#">www.simplon.co</a> <br>
                  <a class="lien" href="#">www.projetsites.bf</a> <br>
                      
     </div>    
   </div>

@endsection
@extends('footer')

