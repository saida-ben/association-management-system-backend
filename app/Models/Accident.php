<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    protected $table = '_accident';
    protected $primaryKey = 'id';
    protected $fillable = [ 'dateR','accident' , 'score', 'decisionA','tempsA','nom','prenom','file' ]; 
    use HasFactory;
}
