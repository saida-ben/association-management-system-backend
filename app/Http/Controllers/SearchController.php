<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\benef;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $term = $request->input('term');

        $results = benef::where('num', 'like', '%' . $term . '%')
                        ->orWhere('idenq', 'like', '%' . $term . '%')
                        
                        ->get();

        return response()->json($results);
    }
}
