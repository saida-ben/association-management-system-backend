<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scolarite;

class ScolariteController extends Controller
{
    function addScolarite(Request $req){
        $vi=new Scolarite;
       

        $vi->dateS= $req->date('dateS');
        $vi->RaisonS= $req->input('RaisonS');
        $vi->remarques= $req->input('remarques');

        
     
        $vi->save();
        return $vi;
    }
    public function affScolarite()
    {
        $Parcours = Scolarite::all();
        return response()->json($Parcours);
    } 
}
