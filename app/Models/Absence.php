<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absence';
    protected $primaryKey = 'id';
    protected $fillable = [ 'dateR','personne' , 'debut', 'fin','tempsAb','raison','nom','prenom' ];
    use HasFactory;
}
