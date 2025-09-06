<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraction;

class InfractionController extends Controller
{
    function enregistrerInfraction(Request $req){
        $Parcours=new Infraction;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
            $file->move($path, $filename); // Move the file to the specified directory
            $Parcours->file = $filename;
        } else {
            // Set file to null if no file is uploaded
            $Parcours->file = null;
        }
        $Parcours->nom= $req->input('nom');
        $Parcours->prenom= $req->input('prenom');
        $Parcours->dateR= $req->date('dateR');
        $Parcours->infraction= $req->input('infraction');
        $Parcours->tempsI= $req->input('tempsI');
        $Parcours->	raisonI= $req->input('raisonI');
        $Parcours->decision= $req->input('decision');
       
        $Parcours->save();
        return $Parcours;
    }
 
    public function destroy($id)
    {
        $Freres = Infraction::find($id);
        $Freres->delete();
        return response()->json(' Infraction deleted!');
    }
    public function updatInfraction(Request $request, $code)
    {
       $benef = Infraction::find($code);
       $benef->update($request->all());
       return response()->json('Infraction updated');
    }
    public function affInfraction()
    {
        
        $Parcours = Infraction::all();
        $aptsWithFile = [];
    
        foreach ($Parcours as $apt) {
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
