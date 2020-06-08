<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apprenants extends Model
{
    //app_nom 	app_prenom 	app_age 	app_formation 	app_durre_form 	app_lien_projet 	app_status 	app_travail 	app_image 
    protected $fillable = ['app_nom' ,	'app_prenom' ,	'app_age', 'app_formation', 'app_durre_form' ,	'app_lien_projet' ,	'app_status' ,	'app_travail' ,'app_image' ];
}
