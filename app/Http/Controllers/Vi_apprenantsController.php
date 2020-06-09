<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response; use App\Apprenants; use Image;
use Illuminate\Http\Request;

class Vi_apprenantsController extends Controller
{
    //

    function index() { $data =  apprenants::latest()->paginate(5);
        return view('../../actualite/visiteur/vi_apprenants', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); }
    
    function insert_image(Request $request) { $request->validate([ 'actu_titre' => 'required', 'actu_description' => 'required',  'actu_image'  ]);
       
        $image_file = $request->actu_image; $image = Image::make($image_file);
         Response::make($image->encode('jpg')); 
         
         $form_data = array( 'actu_titre' => $request->actu_titre, 'actu_description' => $request->actu_description, 'actu_image' => $image ); 
         actualites::create($form_data); 
         return redirect()->back()->with('success', 'Actualité  store in database successfully'); } 
        
        
        function fetch_image($image_id) { $image = actualites::findOrFail($image_id);
            $image_file = Image::make($image->actu_image); $response = Response::make($image_file->encode('jpg'));
             $response->header('Content-Type', 'image/jpg'); return $response; } 
}
