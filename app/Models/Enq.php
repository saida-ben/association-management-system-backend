<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enq extends Model
{
    protected $table = '_enquete_social';
    protected $primaryKey = 'id';
    protected $fillable = ['DATERECHERCHE',  'lieuN', 'dateN', 'nivSc', 'Etat', 'autre', 'sante', 'maladie', 'nbrsoeur', 'nbrfrere','arrang' ,'professionT','telT','ageT','etatmed','nivScT','etatmed',
    ' datEnq', 'lieuEnq', 'service', 'source', 'partage', 'nbr', 'type', 'geo','adressB'
];
    use HasFactory;
}
