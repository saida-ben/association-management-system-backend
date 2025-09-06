<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engag;
class EngagController extends Controller
{
    function Engag(Request $req){
        $Engag=new Engag;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $Engag->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $Engag->file = null;
        }
        $Engag->date= $req->date('date');
        $Engag->lieu= $req->input('lieu');

        $Engag->idBenef= $req->input('idBenef');

        $Engag->save();
        return $Engag;
    }
    public function affEngag()
    {
        
        $apts = Engag::all();
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
