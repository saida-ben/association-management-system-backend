<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandEnv;

class EnvoyDemandController extends Controller
{
    
    function DemandEnv(Request $req){
        $Demand=new DemandEnv;
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
      
        $id = $req->query('id');
        $Demand->id = $id;
    
        $Demand->save();
    
        return response()->json($Demand);
    }
    public function affichEnvD()
    {
        $Demand = DemandEnv::all();
        return response()->json($Demand);
    }
}
