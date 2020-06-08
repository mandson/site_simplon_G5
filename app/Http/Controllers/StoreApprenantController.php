<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response; use App\Apprenants; use Image; 
use Illuminate\Http\Request;

class StoreApprenantController extends Controller
{
    function index() { $data = apprenants::latest()->paginate(5);
        return view('store_apprenants', compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5); }
    //'actu_titre' => 'required', 'actu_description' => 'required',  'actu_image'  

    function insert_image(Request $request) { $request->validate([ 'app_nom'  => 'required',
            'app_prenom' => 'required' ,	'app_age' => 'required', 
            'app_formation' => 'required', 'app_durre_form'  => 'required',
                'app_lien_projet'  => 'required',	'app_status'  => 'required',	
                'app_travail' => 'required' ,'app_image' =>'required' ]);
       
        $image_file = $request->app_image; $image = Image::make($image_file);
         Response::make($image->encode('jpg')); 
        
         $form_data = array('app_nom'=> $request->app_nom,	'app_prenom' => $request->app_prenom ,	'app_age' => $request->app_age, 'app_formation' => $request->app_formation, 
         'app_durre_form'  => $request->app_durre_form,	'app_lien_projet'  => $request->app_lien_projet,	'app_status'  => $request->app_status,	'app_travail' => $request->app_travail ,'app_image'=>$image); 
     
         apprenants::create($form_data); 
         return redirect()->back()->with('success', 'Apprenants store in database successfully'); } 
        
        
        // function fetch_image($image_id) { $image =apprenants::findOrFail($image_id);
        //     $image_file = Image::make($image->app_image); $response = Response::make($image_file->encode('jpg'));
        //      $response->header('Content-Type', 'image/jpg'); return $response; } 
         
        function fetch_image($image_id) { $image = apprenants::findOrFail($image_id);
            $image_file = Image::make($image->app_image); $response = Response::make($image_file->encode('jpeg'));
             $response->header('Content-Type', 'image/jpeg'); return $response; } 

}

