<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;

class AbsenceController extends Controller
{
    function addAbsence(Request $req){
        $vi=new Absence;
       
        $vi->dateR= $req->date('dateR');
        $vi->debut= $req->input('debut');
        $vi->fin= $req->input('fin');
        $vi->tempsAb= $req->input('tempsAb');
        $vi->personne= $req->input('personne');
        $vi->raison= $req->input('raison');


        
     
        $vi->save();
        return $vi;
    }
    public function affAbsence()
    {
        $Parcours = Absence::all();
        return response()->json($Parcours);
    } 
}
