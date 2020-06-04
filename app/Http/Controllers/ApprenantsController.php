<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apprenants;
class ApprenantsController extends Controller
{
    //
    public function  liste(){

       $apprenant=apprenants::All();
    
      return view('apprenants',[
          "apprenant"=>$apprenant  //envoye des donner vers la page views 
      ]);
        }

        public function stock(){
            
            $nom=request('nom');
            $prenom=request('prenom');
            $age=request('age');

            $formation_suivie=request('formation_suivie');
            $duree_formation=request('duree_formation');
            $lien_projet=request('lien_projet');

            $status=request('status');
            $travail=request('travail');
            $photo=request('photo');
             

            $ajouter= new apprenants();
            $ajouter->nom=$nom;
            $ajouter->prenom=$prenom;
            $ajouter->age=$age;
            $ajouter->formation_suivie=$formation_suivie;
            $ajouter->duree_formation=$duree_formation;
            $ajouter->lien_projet=$lien_projet;
            $ajouter->status=$status;
            $ajouter->travail=$travail;
            $ajouter->photo=$photo;
        
            $ajouter->save();
            return back();
     
     
        }
    


}
