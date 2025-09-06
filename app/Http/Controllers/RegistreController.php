<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reg;

class RegistreController extends Controller
{
    function addRegister(Request $req){
        $vi=new Reg;
       

        $vi->dateR= $req->date('dateR');

        
     
        $vi->save();
        return $vi;
    }
    public function affRegister()
    {
        $Parcours = Reg::all();
        return response()->json($Parcours);
    } 
    public function destroy($id)
    {
        $benef = Reg::find($id);
        $benef->delete();
        return response()->json(' deleted!');
    }
    public function search(Request $request)
    {
        $term = $request->input('term');

        $results = Reg::where('dateR', 'like', '%' . $term . '%')
                       
                        
                        ->get();

        return response()->json($results);
    }
}
