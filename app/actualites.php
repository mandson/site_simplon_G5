<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actualites extends Model
{
    //Dans cette classe, nous devons définir dans quelle colonne les données
    // de la colonne, seront remplies par l'utilisateur, nous devons définir 
    //dans la classe de modèle, que vous pouvez trouver ci-dessous.
    protected $fillable = ['actu_titre', 'actu_description','actu_image'];
}
