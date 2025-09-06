<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    protected $table = 'child';
    protected $primaryKey = 'num';
    protected $fillable = ['idCandidat', 'age', 'nomC', 'prenomC', 'adressC', 'cinC', 'telC', 'professionC', 'nomP', 'prenomP', 'vP', 'professionP', 'telP', 'nomM', 'prenomM', 'professionM', 'telM', 'dateD', 'dateF','file'];
    public $incrementing = true; // Add this line to enable auto-increment
    use HasFactory;
}


