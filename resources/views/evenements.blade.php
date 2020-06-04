@extends('layout')
<style>   
           .av3{
                 background-color:red;
                 height:50px;
                 }
         </style>
@section('content')
<style>   
          
  .esapace_milieu1 {
            margin: 10%;
    margin-top: 20%;
    margin-bottom: -10%;
    width: 80%;
    height: auto;
    border: solid 1px black;
    background-color: white;
}
.esapace_milieu2 {
    margin-top: 5%;
    margin-top: 5%;
    width: 100%;
    height: auto;
  
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

<hr><br><div>   <h3>Nos evenements</h3></div>
<div class="row mb-5 container-fluid " >
     
<ul>
<div><ul><br>
@foreach(  $new_even as  $new_even)
<li> <h4>PHOTO:</h4> {{ $new_even->photo}} <br><h4> description </h4> <em class="text-muted">{{$new_even->description}} </em>   </li>

@endforeach 
</ul>
</div><br><br> <br><hr>

 

<div class="row esapace_milieu1">
<div class="col-lg-2">simplon</div>
<div class="col-lg-8 "> 
 

   <div class="esapace_milieu2 " >  <h1 class="ml-2" >ADMINISTRATION>Evenements</h1>
    <form  action="/evenements" method="POST" >
    @csrf
    <div class="form-group">
     <label for="photo">Photo de l'evenement</label><br>
 <input class="border border-primary mt-2" type="file" name="photo" id="photo" > 
  
  </div>
 

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description ,Information utile" rows="2"  name="description" ></textarea>
   
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
     
        <h5><p class="txt1" > Ajout Evenements <br> </p></h5>
     </div>  
     <div class="col-lg-3 mt-2"> <p>
         </p> <h5>lien utiles: </h5>
                   <a class="lien" href="#">www.simplon.co</a> <br>
                  <a class="lien" href="#">www.projetsites.bf</a> <br>
                      
     </div>    
   </div>

@endsection
@extends('footer')

