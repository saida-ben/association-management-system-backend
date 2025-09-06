<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidat;

class CandidatController extends Controller
{
    function candidat(Request $req){
        $child=new candidat;
   
     
        $child->idenq= $req->input('idenq');

       
       
        $child->num= $req->input('yourId');

     

       
       
        $child->save();
        return $child;
    }
    public function affcandidat()
    {
        $child = candidat::all();
        return response()->json($child);
    } 
    public function destroy($id)
    {
        $candidat = candidat::find($id);
        $candidat->delete();
        return response()->json(' candidat deleted!');
    }
}
