<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refus;

class RefusController extends Controller
{
    function addrefus(Request $req) {
        $benef=new Refus;
       
        $benef->idenq= $req->input('idenq');
        $benef->num= $req->input('num');
       
        $benef->save();
     
    
        return $benef;
    }
    
    public function affrefus()
    {
        $benef = Refus::all();
        return response()->json($benef);
    } 
}
