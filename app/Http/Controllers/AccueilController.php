<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response; use App\Accueil;  use App\Apprenants; use App\Actualites;use App\Evenements; 
use Image;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
   
    //pour faire appel au donner apprenant


//******************************************************************************************************************************/ */
  //pour faire appel au donner de l'actualite
  function index() { $data =  actualites::latest()->paginate(5);
    return view('../../actualite/visiteur/accueil', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); }

function insert_image(Request $request) { $request->validate([ 'actu_titre' => 'required', 'actu_description' => 'required',  'actu_image'  ]);
   
    $image_file = $request->actu_image; $image = Image::make($image_file);
     Response::make($image->encode('jpg')); 
     
     $form_data = array( 'actu_titre' => $request->actu_titre, 'actu_description' => $request->actu_description, 'actu_image' => $image ); 
     actualites::create($form_data); 
     return redirect()->back()->with('success', 'Actualité  store in database successfully'); } 
    
    
    function fetch_image($image_id) { $image = actualites::findOrFail($image_id);
        $image_file = Image::make($image->actu_image); $response = Response::make($image_file->encode('jpg'));
         $response->header('Content-Type', 'image/jpg'); return $response; } 


       
       
       
    //    //********************************************************************************************************************** */
    //    function index3() { $data = evenements::latest()->paginate(5);
    //     return view('../../actualite/visiteur/accueil', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); }
    
    // function insert_even(Request $request) { $request->validate([ 'even_description' => 'required', 'even_image'  ]);
    //     $image_file = $request->even_image; $image = Image::make($image_file);
    //      Response::make($image->encode('jpg')); 
    //      $form_data = array( 'even_description' => $request->even_description, 'even_image' => $image ); 
    //      evenements::create($form_data); 
    //      return redirect()->back()->with('success', 'Evenement  store in database successfully'); } 
        
        
    //     function fetch_even($image_id) { $image = evenements::findOrFail($image_id);
    //         $image_file = Image::make($image->even_image); $response = Response::make($image_file->encode('jpg'));
    //          $response->header('Content-Type', 'image/jpg'); return $response; } 
    }
 