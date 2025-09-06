<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;
class RapportController extends Controller
{
    function addRapport(Request $req){
        $vi=new Rapport;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $vi->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $vi->file = null;
        }

        $vi->numR= $req->input('numR');
        $vi->nomR= $req->input('nomR');
        $vi->causeV= $req->input('causeV');
        $vi->date= $req->date('date');
        $vi->Heure= $req->input('Heure');
        $vi->accompagnant= $req->input('accompagnant');
        $vi->sujetV= $req->input('sujetV');
        $vi->remarque= $req->input('remarque');
        $vi->descrEtatphysique= $req->input('descrEtatphysique');
        $vi->descrEtatpsychique= $req->input('descrEtatpsychique');





        
     
        $vi->save();
        return $vi;
    }
    public function affRapport()
    {
        $apts = Rapport::all();
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
