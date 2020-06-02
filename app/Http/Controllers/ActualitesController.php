<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualitesController extends Controller
{
    //  
    public function  liste(){

        $une_actu=[ 
            "titre",
            "Description",
            " photo",
       ];
  
      return view('actualite.index',[
          "une_actu"=>$une_actu  //envoye des donner vers la page views 
      ]);
      
    }
}
