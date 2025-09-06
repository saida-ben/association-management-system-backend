<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $table = '_rapport';
    protected $primaryKey = 'numR';
    protected $fillable = ['numR', 'nomR', 'causeV', 'date', 'Heure', 'accompagnant', 'sujetV','remarque','descrEtatphysique','descrEtatpsychique','file'];
    use HasFactory;
}
