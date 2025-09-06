<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sortie;

class SortieController extends Controller
{
    function addSortie(Request $req){
        $Sortie=new Sortie;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
            $file->move($path, $filename); // Move the file to the specified directory
            $Sortie->file = $filename;
        } else {
            // Set file to null if no file is uploaded
            $Sortie->file = null;
        }

        $Sortie->dateAS= $req->date('dateAS');
        $Sortie->numAS= $req->input('numAS');
        $Sortie->remarque= $req->input('remarque');

        
     
        $Sortie->save();
        return $Sortie;
    }
    public function affSortie()
    {
        $Sorties = Sortie::all();
        $logsWithFile = [];

        foreach ($Sorties as $Sortie) {
            $logWithFile = $Sortie->toArray();
            if (!empty($Sortie->file)) {
                $logWithFile['file_url'] = asset('file:///C:/Users/user/Desktop/te/rea/public/images/' . $Sortie->file);
            } else {
                $logWithFile['file_url'] = null;
            }
            $logsWithFile[] = $logWithFile;
        }
    
        return response()->json($logsWithFile);
    } 
}
