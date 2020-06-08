@extends('layout')
<style>   
           .av2{
                 background-color:red;
                 height:50px;
                 }
         </style>
@section('content')

<style>   
          
  .esapace_milieu1 {
            margin: 10%;
    margin-top: 10%;
    margin-bottom: -10%;
    width: 80%;
    height: auto;
    border: solid 1px black;
    background-color: white;
}
.esapace_milieu2 {
    margin: 5%;
    /* margin-top: 10%; */
    width: 80%;
    height: 50%;
  
    background-color: white;
}

 .marges1{
         margin-top:10%;
         }

         .txt1{ 
             color:black;
             margin-top:5%;
             
         }
         .lien{
            color:black;
             margin-bottom:-20px;
             padding:0px;
         }
                  </style>



<hr><br>
<div class="row mb-5 container-fluid " ><ul>
<!-- <h2>Nos Actualite du mois</h2>
@foreach(  $une_actu as  $une_actu)
<div><li> <h4>titre de l'ACTU:</h4> <h5>{{ $une_actu->titre}}  </h5>    </li>
</div>
@endforeach 
</ul> -->
<hr>
</div><br><br> <br>


<div class="row esapace_milieu1 mb-5">
<div class="col-lg-2">simplon</div>
<div class="col-lg-8 "> 
 
 
   <div class="esapace_milieu2 " >  <h1 class="ml-2" >ADMINISTRATION>Actualités</h1>


  <form action="/actualites"  method="POST"  enctype="multipart/form-data" >
              @csrf
             <div class="form-group">
                <label for="exampleFormControlInput1">Titre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Donner le titre de l'Actuatlité"  name="titre">
             </div>
              
             
              <div class="form-group">
                 <label for="photo">Photo de l'Actualite</label><br>
                 <input class="border border-primary mt-2" type="file" name="image" id="photo" > 
  
              </div>

              <div class="form-group">
                  <label for="formation">Descrire l'Actualite : </label>
                  <textarea class="form-control" id="formation" placeholder=" Des information..... " rows="2"  name="description"></textarea>
             </div>
        <button type="submit" class="btn btn-primary border border-danger">Enregistrer</button>
       
   </form>
       
   </div>


</div>
<div class="col-lg-2 pl-5">simplon</div>


</div>

<div class="row bg marges1" > 
<div class="col-lg-3 mt-3"> <p>
         </p> <h5>PARTENAIRES: </h5>
                   AUF/OUAGA <br>
                     UO1 <br>
                    SGBB      
     </div>  
     <div class="col-lg-6">  
     
        <h5><p class="txt1" >Gestion d'Actualités  <br> </p></h5>
     </div>  
     <div class="col-lg-3 mt-2"> <p>
         </p> <h5>lien utiles: </h5>
                   <a class="lien" href="#">www.simplon.co</a> <br>
                  <a class="lien" href="#">www.projetsites.bf</a> <br>
                      
     </div>    
   </div>
 
@endsection
@extends('footer')


