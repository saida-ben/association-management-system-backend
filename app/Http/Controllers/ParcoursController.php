<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcours;
class ParcoursController extends Controller
{
    function save(Request $req){
        $Parcours=new Parcours;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $Parcours->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $Parcours->file = null;
        }
        $Parcours->etabliss= $req->input('etabliss');
        $Parcours->nivSc= $req->input('nivSc');
        $Parcours->annSc= $req->input('annSc');
        $Parcours->MS1= $req->input('MS1');
        $Parcours->MS2= $req->input('MS2');
        $Parcours->MG= $req->input('MG');
        $Parcours->decisionM= $req->input('decisionM');
        $Parcours->idBenef= $req->input('idBenef');

        
       
        $Parcours->save();
        return $Parcours;
    }
    public function inde()
    {
        $apts = Parcours::all();
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
