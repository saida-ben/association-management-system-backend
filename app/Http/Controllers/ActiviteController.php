<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActiviteController extends Controller
{
    function addActivite(Request $req){
        $vi=new Activite;
        $vi->nom= $req->input('nom');
        $vi->prenom= $req->input('prenom');
        $vi->dateR= $req->date('dateR');
        $vi->activite= $req->input('activite');
        $vi->type= $req->input('type');
        $vi->encadrant= $req->input('encadrant');
        $vi->tempsA= $req->input('tempsA');


        
     
        $vi->save();
        return $vi;
    }
    public function affActivite()
    {
        $Parcours = Activite::all();
        return response()->json($Parcours);
    } 
    public function updatactivity(Request $request, $id)
    {
       $benef = Activite::find($id);
       $benef->update($request->all());
       return response()->json('Activite updated');
    }
    public function destroy($id)
    {
        $Freres = Activite::find($id);
        $Freres->delete();
        return response()->json('Activite  deleted!');
    }
}
