<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\child;
class ChildController extends Controller
{
    function child(Request $req){
        $child=new child;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
            $file->move($path, $filename); // Move the file to the specified directory
            $child->file = $filename;
        } else {
            // Set file to null if no file is uploaded
            $child->file = null;
        }
       
        $child->idCandidat= $req->input('idCandidat');

        $child->age= $req->input('age');
     
        $child->telC= $req->input('telC');
        $child->nomC= $req->input('nomC');
        $child->prenomC= $req->input('prenomC');
        $child->adressC= $req->input('adressC');
        $child->cinC= $req->input('cinC');
        $child->professionC= $req->input('professionC');
       
        $child->nomP= $req->input('nomP');
        $child->prenomP= $req->input('prenomP');
        $child->vP= $req->input('vP');
        $child->professionP= $req->input('professionP');
        $child->telP= $req->input('telP');
        $child->nomM= $req->input('nomM');
        $child->prenomM= $req->input('prenomM');
        $child->vM= $req->input('vM');
       
        $child->professionM= $req->input('professionM');   
        $child->telM= $req->input('telM');
        $child->dateD= $req->input('dateD');   
        $child->dateF= $req->input('dateF');
       
        $child->save();
        return $child;
    }
    public function in()
    {
        $childs = child::all();
        $logsWithFile = [];

        foreach ($childs as $child) {
            $logWithFile = $child->toArray();
            if (!empty($child->file)) {
                $logWithFile['file_url'] = asset('file:///C:/Users/user/Desktop/te/rea/public/images/' . $child->file);
            } else {
                $logWithFile['file_url'] = null;
            }
            $logsWithFile[] = $logWithFile;
        }
    
        return response()->json($logsWithFile);
    } 
}
