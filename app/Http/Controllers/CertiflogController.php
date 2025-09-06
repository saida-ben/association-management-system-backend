<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\log;

class CertiflogController extends Controller
{
    
function log(Request $req) {
    $log = new Log();
    
    if ($req->hasFile('file')) {
        // Handle file upload
        $file = $req->file('file');
        $filename = $file->getClientOriginalName();
        $path = 'file:///C:/Users/user/Desktop/te/rea/public/images/'; // Set the desired file path
        $file->move($path, $filename); // Move the file to the specified directory
        $log->file = $filename;
    } else {
        // Set file to null if no file is uploaded
        $log->file = null;
    }
    
    $log->responsable = $req->input('responsable');
    $log->DateL = $req->input('DateL');
    $log->idBenef = $req->input('idBenef');

    $log->save();
    return $log;
}
   
public function c()
{
    $logs = Log::all();
    $logsWithFile = [];

    foreach ($logs as $log) {
        $logWithFile = $log->toArray();
        if (!empty($log->file)) {
            $logWithFile['file_url'] = asset('file:///C:/Users/user/Desktop/te/rea/public/images/' . $log->file);
        } else {
            $logWithFile['file_url'] = null;
        }
        $logsWithFile[] = $logWithFile;
    }

    return response()->json($logsWithFile);
}

}
