@extends('layout')
@section('content')
<html> <head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> Ajout des Apprenants</title> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
   <body> 
   
       <div class="container"> <br /> <h3 align="center">ADMINISTRATION:Enregistrement Appprenants/Allumnis </h3> <br /> @if($errors->any())
        <div class="alert alert-danger"> <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul> </div> @endif @if(session()->has('success'))
         <div class="alert alert-success"> {{ session()->get('success') }} </div> @endif <br /> 
         <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title"> Formulaire</h3> </div>
          <div class="panel-body"> <br /> <form method="post" action="{{ url('store_apprenants/insert_image') }}" enctype="multipart/form-data">
          
           @csrf 
           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Nom</label> 
           <div class="col-md-8"> <input type="text" name="app_nom" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Prenom</label> 
           <div class="col-md-8"> <input type="text" name="app_prenom" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Date de naissance</label> 
           <div class="col-md-8"> <input type="text" name="app_age" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Formation</label> 
           <div class="col-md-8"> <input type="text" name="app_formation" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Duree de la formation</label> 
           <div class="col-md-8"> <input type="text" name="app_durre_form" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Projet(s) Réaliser</label> 
           <div class="col-md-8"> <input type="text" name="app_lien_projet" class="form-control" > </div> </div> </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Status</label> 
           <div class="col-md-8"><select class="custom-select  " name="app_status"  id="status">
                                      <option value="Apprenants">Apprenant</option>
                                      <option value="Allumnis">Allumnis</option>
                                </select> <br>
                               </div> </div> 
           </div>

           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">travail</label> 
           <div class="col-md-8"> <input type="text" name="app_travail" class="form-control" > </div> </div> </div>


            <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Ajouter une Photo</label>
               <div class="col-md-8"> <input  type="file" name="app_image" /> </div> </div> </div> <div class="form-group" align="center"> <br /> <br /> 
                <input type="submit" name="store_app" class="btn btn-primary" value="Save" />
             </div> </form> </div> </div>
             
             
              <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title">Liste des Apprenants</h3> </div> 
   
    <div class="panel-body"> <div class="table-responsive">
              <table class="table table-bordered table-striped"> 
              <tr> <th width="20%">Image</th> <th width="30%">Profil</th> <th width="100%">Cursus</th> </tr> @foreach($data as $row) <tr> 
              
              <td> <img src="store_apprenants/fetch_image/{{ $row->id }}" class="img-thumbnail" width="100" /> </td>
               <td>Nom:{{ $row->app_nom }} <br>
                Prenom:{{ $row->app_prenom }}
                Date de Naissance:{{ $row->app_age }}

                
                </td>

                <td>
                <h5><b> Status:{{ $row->app_status }}   <br></h5>
                Formation en: {{ $row->app_formation }} <br>
                Duree de la formation:{{ $row->app_durre_form}} <br>
                <div> Projet Realiser:<a href="{{ $row->app_lien_projet}}" target="_blank">{{ $row->app_lien_projet}} </a> <br>
               </div>
                Emploie:{{ $row->app_travail}} <br>
                </td> 
              </tr> @endforeach </table> {!! $data->links() !!} </div> 
              </div> </div> </div> 
      </body>
</html>
@endsection
@extends('footer')
