<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;
class TuteurController extends Controller
{
    public function affich()
    {
        $Tuteur = Tuteur::all();
        return response()->json($Tuteur);
    } 
}
