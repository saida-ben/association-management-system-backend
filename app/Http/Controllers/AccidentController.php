<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accident;

class AccidentController extends Controller
{
    function addAccident(Request $req){
        $vi=new Accident;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
            $file->move($path, $filename); // Move the file to the specified directory
            $vi->file = $filename;
        } else {
            // Set file to null if no file is uploaded
            $vi->file = null;
        }
        $vi->nom= $req->input('nom');
        $vi->prenom= $req->input('prenom');
        $vi->dateR= $req->date('dateR');
        $vi->accident= $req->input('accident');
        $vi->score= $req->input('score');
        $vi->decisionA= $req->input('decisionA');
        $vi->tempsA= $req->input('tempsA');


        
     
        $vi->save();
        return $vi;
    }
    public function affAccident()
    {
      
        $Accidents = Accident::all();
        $aptsWithFile = [];
    
        foreach ($Accidents as $apt) {
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
    public function destroy($id)
    {
        $Freres = Accident::find($id);
        $Freres->delete();
        return response()->json(' incident deleted!');
    }
    public function updatincident(Request $request, $id)
    {
       $benef = Accident::find($id);
       $benef->update($request->all());
       return response()->json('incident updated');
    }
}
