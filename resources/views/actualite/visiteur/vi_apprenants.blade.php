
@extends('actualite/visiteur/vi_layout')
<hr>

@section('content_vi')

<div class="panel-body container-fluid  "> <div class="table-responsive">
                   <div   ><h1  class=" ml-5 text-justify" >APPRENANTS ET ALLUMNIS DE SIMPLON BF</h1></div>

              <table class="table table-bordered table-striped mt-5"> 
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
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, officia minus praesentium unde sequi quod voluptate maiores. Error incidunt, expedita rerum adipisci deleniti maxime saepe quia voluptas. Nesciunt, in quaerat!</p>
@endsection