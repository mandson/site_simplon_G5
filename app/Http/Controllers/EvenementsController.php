<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evenements;
class EvenementsController extends Controller
{
  //  
  public function  liste(){

    $new_even=evenements::All();

  return view('evenements',[
      "new_even"=>$new_even  //envoye des donner vers la page views 
  ]);
    }

    public function stock(){
       
        $photo=request('photo');
        $description=request('description');
         
        $ajouter= new evenements();
        $ajouter->photo=$photo;
        $ajouter->description=$description;
        $ajouter->save();
        return back();
 
 
    }

}
