<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $table = '_activites';
    protected $primaryKey = 'id';
    protected $fillable = [ 'dateR','activite' , 'type', 'encadrant','tempsA','nom','prenom' ]; 
    use HasFactory;
}
