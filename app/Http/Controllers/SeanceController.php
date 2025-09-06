<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;

class SeanceController extends Controller
{
    function enregistrerSeance(Request $req){
        $Parcours=new Seance;
        $Parcours->nom= $req->input('nom');
        $Parcours->prenom= $req->input('prenom');
        $Parcours->dateR= $req->date('dateR');
        $Parcours->seance= $req->input('seance');
        $Parcours->debutS= $req->input('debutS');
        $Parcours->finS= $req->input('finS');

        $Parcours->prof= $req->input('prof');
        $Parcours->presence= $req->input('presence');

       
        $Parcours->save();
        return $Parcours;
    }

    public function destroy($id)
    {
        $Freres = Seance::find($id);
        $Freres->delete();
        return response()->json(' Seance deleted!');
    }
    public function updatSeance(Request $request, $id)
    {
       $benef = Seance::find($id);
       $benef->update($request->all());
       return response()->json('Seance updated');
    }
    public function affSeance()
    {
        $Parcours = Seance::all();
        return response()->json($Parcours);
    } 
}
