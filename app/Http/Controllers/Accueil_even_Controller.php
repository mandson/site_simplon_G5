<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response; use App\Accueil;  use App\Apprenants; use App\Actualites;use App\Evenements; 

use Illuminate\Http\Request;

class Accueil_even_Controller extends Controller
{
    //
 //******************************************************************************************************************* */
 function index() { $data = evenements::latest()->paginate(5);
    return view('../../actualite/visiteur/accueil', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); }

function insert_image(Request $request) { $request->validate([ 'even_description' => 'required', 'even_image'  ]);
    $image_file = $request->even_image; $image = Image::make($image_file);
     Response::make($image->encode('jpg')); 
     $form_data = array( 'even_description' => $request->even_description, 'even_image' => $image ); 
     evenements::create($form_data); 
     return redirect()->back()->with('success', 'Evenement  store in database successfully'); } 
    
    
    function fetch_image($image_id) { $image = evenements::findOrFail($image_id);
        $image_file = Image::make($image->even_image); $response = Response::make($image_file->encode('jpg'));
         $response->header('Content-Type', 'image/jpg'); return $response; } 
  
}
