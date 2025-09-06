<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\besoin;
class BesoinController extends Controller
{
    function besoin(Request $req){
        $besoin=new besoin;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $besoin->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $besoin->file = null;
        }
       
      
        $besoin->dB= $req->date('dB');
        $besoin->lieu= $req->input('lieu');
        $besoin->idBenef= $req->input('idBenef');
        $besoin->cin= $req->input('cin');

        
        $besoin->save();
        return $besoin;
    }
    public function affichbesoin()
    {
       
        
        $apts = besoin::all();
        $aptsWithFile = [];
    
        foreach ($apts as $apt) {
            $aptWithFile = $apt->toArray();
            if (!empty($apt->file)) {
                $aptWithFile['file_url'] = asset('uploads/' . $apt->file);
            } else {
                $aptWithFile['file_url'] = null;
            }
            $aptsWithFile[] = $aptWithFile;
        }
    
        return response()->json($aptsWithFile);
     
    } 
}
