@extends('layout')
<style>   
           .av2{
                 /* background-color:red;
                 height:50px; */
                 }
         </style>
@section('content')
<style>   
          body{
              height:80%;
          }
          
           .av1{
                 background-color:red;
                 height:50px;
           }
           .esapace_milieu1 {
            margin: 10%;
    margin-top: 10%;
    margin-bottom: -10%;
    width: 80%;
    height: 60%;
    border: solid 2px black;
    background-color: white;
}
.esapace_milieu2 {
    margin: 12%;
    /* margin-top: 10%; */
    width: 80%;
    height: 50%;
  
    background-color: white;
}

 .marges1{
         margin-top:15%;
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
<div class="row esapace_milieu1">
<div class="col-lg-2">simplon</div>
<div class="col-lg-8 "> 
   <div class="esapace_milieu2 " >  <h1 class="ml-5" >ADMINISTRATION</h1></div>
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
     
        <p class="txt1" >Gestion d'Actualités  <br>     
          des Evenements en cours      <br>
          Enregistrement des apprenants  <br>     
          Reseaux d'Allumnis </p>
     </div>  
     <div class="col-lg-3 mt-2"> <p>
         </p> <h5>lien utiles: </h5>
                   <a class="lien" href="#">www.simplon.co</a> <br>
                  <a class="lien" href="#">www.projetsites.bf</a> <br>
                      
     </div>    
   </div>

@endsection
@extends('footer')

