<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medic;
class DossierMedicalController extends Controller
{
    function Medic(Request $req){
        $Medic=new Medic;
        if ($req->hasFile('file')) {
            // Handle file upload
            $file = $req->file('file');
            $filename = $file->getClientOriginalName();
            $path =  $filename; // Set the desired file path
            $file->move('file:///C:/Users/user/Desktop/te/rea/public/images/', $filename); // Move the file to the specified directory
            $Medic->file = $path;
            
        } else {
            // Set file to null if no file is uploaded
            $Medic->file = null;
        }
       

      
        $Medic->dA= $req->date('dA');
        $Medic->poids= $req->input('poids');
        $Medic->sang= $req->input('sang');
        $Medic->diabete= $req->input('diabete');
        $Medic->asthme= $req->input('asthme');
        $Medic->allergie= $req->input('allergie');
        $Medic->Neuropathie= $req->input('Neuropathie');
        $Medic->hemophilie= $req->input('hemophilie');
        $Medic->Hypertension= $req->input('Hypertension');
        $Medic->myopathie= $req->input('myopathie');
        $Medic->tuberculose= $req->input('tuberculose');
        $Medic->autr= $req->input('autr');
        $Medic->dent= $req->input('dent');
        $Medic->ventre= $req->input('ventre');
        $Medic->pr= $req->input('pr');
        $Medic->coeur= $req->input('coeur');
        $Medic->souf= $req->input('souf');
        $Medic->son= $req->input('son');
        $Medic->sonsouf= $req->input('sonsouf');
        $Medic->rad= $req->input('rad');
        $Medic->cliquetis= $req->input('cliquetis');
        $Medic->muscl= $req->input('muscl');
        $Medic->refl= $req->input('refl');
        $Medic->sm= $req->input('sm');
        $Medic->aud= $req->input('aud');
        $Medic->brul= $req->input('brul');
        $Medic->testur= $req->input('testur');
        $Medic->peau= $req->input('peau');
        $Medic->tet= $req->input('tet');
        $Medic->muqueuses= $req->input('muqueuses');
        $Medic->gale= $req->input('gale');
        $Medic->sousgueule= $req->input('sousgueule');
        $Medic->clavicule= $req->input('clavicule');
        $Medic->Bequilles= $req->input('Bequilles');
        $Medic->cuisse= $req->input('cuisse');
        $Medic->VDRL= $req->input('VDRL');
        $Medic->Glycemie= $req->input('Glycemie');
        $Medic->Hepatite= $req->input('Hepatite');
        $Medic->NFS= $req->input('NFS');
        $Medic->HIV= $req->input('HIV');
        $Medic->BCG= $req->input('BCG');
        $Medic->tetanos= $req->input('tetanos');
        $Medic->Vaccin= $req->input('Vaccin');
        $Medic->idBenef= $req->input('idBenef');

        

        $Medic->save();
        return $Medic;
    }
    public function affMedical()
    {
        
        $apts = Medic::all();
        $aptsWithFile = [];
    
        foreach ($apts as $apt) {
            $aptWithFile = $apt->toArray();
            if (!empty($apt->file)) {
                $aptWithFile['file_url'] = asset('uploads/' . $apt->file);
            } else {
                $aptWithFile['file_url'] = null;
            }
            $aptsWithFile[] = $aptWithFile;
        }
    
        return response()->json($aptsWithFile);
    }
}
