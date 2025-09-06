<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exon;
class ExonFrController extends Controller
{
    function Exon(Request $req){
        $Exon=new Exon;
       
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $Exon->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $Exon->file = null;
        }
        $Exon->datEx= $req->date('datEx');
        
        $Exon->lieuEx= $req->input('lieuEx');

        $Exon->idBenef= $req->input('idBenef');

        
        $Exon->save();
        return $Exon;
    }
    public function affExon()
    {
       
       
        $apts = Exon::all();
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
