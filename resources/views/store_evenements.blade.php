@extends('layout')
@section('content')
<html> <head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> Ajout des Evenements</title> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
   <body> 
   
       <div class="container"> <br /> <h3 align="center">ADMINISTRATION:Ajout d'evenements </h3> <br /> @if($errors->any())
        <div class="alert alert-danger"> <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul> </div> @endif @if(session()->has('success'))
         <div class="alert alert-success"> {{ session()->get('success') }} </div> @endif <br /> 
         <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title"> Formulaire</h3> </div>
          <div class="panel-body"> <br /> <form method="post" action="{{ url('store_evenements/insert_image') }}" enctype="multipart/form-data">
          
           @csrf 
           
           <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Evenement Description</label> 
           <div class="col-md-8"> <textarea name="even_description" class="form-control" cols="2" rows="3"></textarea></div> </div> </div>

            <div class="form-group"> <div class="row"> <label class="col-md-4" align="right">Select Evenement Image</label>
             <div class="col-md-8"> <input  type="file" name="even_image" /> </div> </div> </div> <div class="form-group" align="center"> <br /> <br /> 
             <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
             </div> </form> </div> </div> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title">Liste des Evenements</h3> </div> 
   
    <div class="panel-body"> <div class="table-responsive">
              <table class="table table-bordered table-striped"> 
              <tr> <th width="30%">Image</th> <th width="100%">Evenement</th> </tr> @foreach($data as $row) <tr> 
              
              <td> <img src="store_evenements/fetch_image/{{ $row->id }}" class="img-thumbnail" width="100" /> </td> <td>{{ $row->even_description }}</td> 
              </tr> @endforeach </table> {!! $data->links() !!} </div> 
              </div> </div> </div> 
      </body>
</html>
@endsection
@extends('footer')
