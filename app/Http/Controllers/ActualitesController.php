<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\actualites;  
class ActualitesController extends Controller
{
    //  
    public function  liste(){

        $une_actu=actualites::All();
  
      return view('actualite.index',[
          "une_actu"=>$une_actu  //envoye des donner vers la page views index.blade.php
      ]);
        }

   public function stock(){
       $titre=request('titre');
       $image=request('image');
       $description=request('description');
        
       $ajouter= new actualites();
       $ajouter->titre=$titre;
       $ajouter->image=$image;
       $ajouter->description=$description;
       $ajouter->save();
       return back();


   }
}
