<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etat;
class EtatController extends Controller
{
    function Etat(Request $req){
        $Etat=new Etat;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
            $file->move($path, $filename); // Move the file to the specified directory
            $Etat->file = $filename;
        } else {
            // Set file to null if no file is uploaded
            $Etat->file = null;
        }
       
        $Etat->off= $req->input('off');
     
        $Etat->dC= $req->date('dC');
        $Etat->C= $req->input('C');
        $Etat->th= $req->input('th');

        $Etat->idBenef= $req->input('idBenef');
        $Etat->save();
        return $Etat;
    }
    public function affEtat()
    {
        $Etats = Etat::all();
        $logsWithFile = [];

        foreach ($Etats as $Etat) {
            $logWithFile = $Etat->toArray();
            if (!empty($Etat->file)) {
                $logWithFile['file_url'] = asset('file:///C:/Users/user/Desktop/te/rea/public/images/' . $Etat->file);
            } else {
                $logWithFile['file_url'] = null;
            }
            $logsWithFile[] = $logWithFile;
        }
    
        return response()->json($logsWithFile);
      
    }
}
