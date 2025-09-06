<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vi;
class ViController extends Controller
{
    function vi(Request $req){
        $vi=new vi;
       
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
        $vi->idBenef= $req->input('idBenef');
        $vi->lieucol= $req->input('lieucol');
        $vi->datcol= $req->date('datcol');

        
     
        $vi->save();
        return $vi;
    }
    public function affvi()
    {
       
        $apts = vi::all();
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
