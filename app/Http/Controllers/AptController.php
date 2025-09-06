<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apt;
class AptController extends Controller
{
    function Apt(Request $req)
    {
        $Apt = new Apt;
    
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $Apt->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $Apt->file = null;
        }
    
        // Handle data insertion
        $Apt->nomD = $req->input('nomD');
        $Apt->prenomD = $req->input('prenomD');
        $Apt->univ = $req->input('univ');
        $Apt->d = $req->input('d');
        $Apt->etabliss = $req->input('etabliss');
        $Apt->apte = $req->input('apte');
        $Apt->idBenef = $req->input('idBenef');
    
        $Apt->save();
    
        return $Apt;
    }
    
    public function affichApt()
    {
        $apts = Apt::all();
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
