<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand;
class DemandController extends Controller
{
    function Demand(Request $req){
        $Demand=new Demand;
        $Demand->num= $req->input('num');

        $Demand->nomT= $req->input('nomT');
        $Demand->prenomT= $req->input('prenomT');
        $Demand->cinT= $req->input('cinT');
        $Demand->dateCin= $req->date('dateCin');
        $Demand->adress= $req->input('adress');
        $Demand->role= $req->input('role');
        $Demand->nomRole= $req->input('nomRole');
         $Demand->institut= $req->input('institut');
         $Demand->lieuE= $req->input('lieuE'); 
         $Demand->DatE= $req->date('DatE');
         $Demand->raison= $req->input('raison');
         $Demand->autreR= $req->input('autreR');
         $Demand->MoyenneSc= $req->input('MoyenneSc');
        $Demand->nom= $req->input('nom');
        $Demand->prenom= $req->input('prenom');
      
       
       
    
        $Demand->save();
    
        return response()->json($Demand);
    }
    public function affd()
    {
        $Demand = Demand::all();
        return response()->json($Demand);
    }
    public function affichageDemande($id)
    {
        $Demand = Demand::find($id);

        if (!$Demand) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $attributes = [
            'id' => $Demand->id,
            'nomT' => $Demand->nomT,
            'prenomT' => $Demand->prenomT,
            'cinT' => $Demand->cinT,
            'dateCin' => $Demand->dateCin,
            'adress' => $Demand->adress,
            'role' => $Demand->role,
            'nomRole' => $Demand->nomRole,
            'institut' => $Demand->institut,
            'lieuE' => $Demand->lieuE,
            'DatE' => $Demand->DatE,
            'raison' => $Demand->raison,
            'autreR' => $Demand->autreR,
            'MoyenneSc' => $Demand->MoyenneSc,
            'nom' => $Demand->nom,
            'prenom' => $Demand->prenom,
         
            // Ajoutez ici les autres attributs que vous souhaitez renvoyer
        ];

        return response()->json($attributes);
    }

    
}
