<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enq;
class EnqController extends Controller
{
    function Enq(Request $req){
        $Enq=new Enq;
       
        $Enq->DATERECHERCHE= $req->date('DATERECHERCHE');
       
        $Enq->lieuN= $req->input('lieuN');
        $Enq->dateN= $req->date('dateN');
        $Enq->nivSc= $req->input('nivSc');
        $Enq->Etat= $req->input('Etat');
 
        $Enq->autre= $req->input('autre');
        $Enq->sante= $req->input('sante');
        $Enq->maladie= $req->input('maladie');
        $Enq->nbrsoeur= $req->input('nbrsoeur');
        $Enq->nbrfrere= $req->input('nbrfrere');
        $Enq->arrang= $req->input('arrang');
        $Enq->nivScT= $req->input('nivScT');
        $Enq->professionT= $req->input('professionT');
        $Enq->telT= $req->input('telT');

        
        $Enq->ageT= $req->input('ageT');
        $Enq->etatmed= $req->input('etatmed');

        $Enq->datEnq= $req->date('datEnq');
        $Enq->type= $req->input('type');
        $Enq->nbr= $req->input('nbr');
        $Enq->geo= $req->input('geo');
        $Enq->partage= $req->input('partage');
        $Enq->lieuEnq= $req->input('lieuEnq');
        $Enq->source= $req->input('source');
        $Enq->service= $req->input('service');
        $Enq->adressB= $req->input('adressB');
        

        $Enq->save();
        return $Enq;
    }
    public function affEnq()
    {
        $Enq = Enq::all();
        return response()->json($Enq);
    }
}
