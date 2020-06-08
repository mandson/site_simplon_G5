@extends('actualite/visiteur/vi_layout')
<hr>
<style>

.image{
    height:300px;
    width:70% !important;
}

</style>
@section('content_vi')

<div class=" justify-content-center panel panel-default"> <div class="panel-heading"> </div> 
         <div> <marquee behavior="" direction=""> <h3 class="panel-title">Liste des Actualites</h3></marquee> </div>
   <div class="panel-body"> <div class="table-responsive justify-content-center">
           
             @foreach($data as $row) 
             

             <div class="w-70 justify-content-center">

  <div class="card w-40 mt-4 ">
  
    <div class="card-body">
     <b> <h4 class="card-title border">{{ $row->actu_titre }}</h4></b>
      <img src="store_actualite/fetch_image/{{ $row->id }}" class="card-img-top image " alt="...">
      <p class="card-text">{{ $row->actu_description }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Publie le: {{ $row->updated_at }}</small>
    </div>
  </div>
</div>


            @endforeach {!! $data->links() !!} </div> 
            
</div>



   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, officia minus praesentium unde sequi quod voluptate maiores. Error incidunt, expedita rerum adipisci deleniti maxime saepe quia voluptas. Nesciunt, in quaerat!</p>
@endsection
</div>

