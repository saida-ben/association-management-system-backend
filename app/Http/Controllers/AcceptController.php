<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accept;

class AcceptController extends Controller
{
    function addaccept(Request $req) {
        $benef=new Accept;
       
        $benef->idenq= $req->input('idenq');
        $benef->num= $req->input('num');
       
        $benef->save();
     
    
        return $benef;
    }
    
    public function affaccept()
    {
        $benef = Accept::all();
        return response()->json($benef);
    } 
  
 
}
