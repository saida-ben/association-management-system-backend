<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\benef;
class BenefController extends Controller
{   
    function benef(Request $req) {
        $benef=new benef;
       
        $benef->idenq= $req->input('idenq');
        $benef->num= $req->input('num');
       
        $benef->save();
     
    
        return $benef;
    }
    
    public function index()
    {
        $benef = benef::all();
        return response()->json($benef);
    } 
  
    public function update(Request $request, $id)
    {
       $benef = benef::find($id);
       $benef->update($request->all());
       return response()->json('Employee updated');
    }
    public function destroy($id)
    {
        $benef = benef::find($id);
        $benef->delete();
        return response()->json(' deleted!');
    }
}
