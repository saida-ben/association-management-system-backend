<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freres;

class FreresController extends Controller
{
    function enregistrer(Request $req){
        $Parcours=new Freres;
       
        $Parcours->nom= $req->input('nom');
        $Parcours->prenom= $req->input('prenom');
        $Parcours->nivSc= $req->input('nivSc');
        $Parcours->age= $req->input('age');
        $Parcours->profession= $req->input('profession');
        $Parcours->vie= $req->input('vie');
        $Parcours->sexe= $req->input('sexe');
        $Parcours->etatme= $req->input('etatme');
       
        $Parcours->save();
        return $Parcours;
    }
    public function modifier()
    {
        $Parcours = Freres::all();
        return response()->json($Parcours);
    } 
    public function destroy($code)
    {
        $Freres = Freres::find($code);
        $Freres->delete();
        return response()->json(' deleted!');
    }
    public function updateF(Request $request, $code)
    {
       $benef = Freres::find($code);
       $benef->update($request->all());
       return response()->json('Freres updated');
    }
  
    public function affFrere()
    {
        $Parcours = Freres::all();
        return response()->json($Parcours);
    } 
}
