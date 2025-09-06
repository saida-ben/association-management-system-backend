<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $table = '_dossier_medical';
    protected $primaryKey = 'id';
    protected $fillable = [ 'dA' ,'poids', 'sang', 'diabete', 'asthme', 'allergie', 'Neuropathie', 'hemophilie', 'Hypertension', 'myopathie', 'tuberculose', 'autr', 'dent',  'ventre', 'pr', 'coeur', 'souf', 'son', 'sonsouf', 'rad', 'cliquetis', 'muscl', 'refl', 'sm', 'aud', 'brul', 'testur', 
    'peau', 'tet', 'muqueuses', 'gale', 'sousgueule', 'clavicule', 'Bequilles', 'cuisse', 'VDRL', 'Glycemie', 'Hepatite', 'NFS', 'HIV', 'BCG', 'tetanos', 'Vaccin', 'idBenef','file'];
    use HasFactory;
}
