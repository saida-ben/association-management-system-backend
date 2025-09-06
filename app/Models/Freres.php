<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freres extends Model
{
    protected $table = '_freres';
    protected $primaryKey = 'code';
    protected $fillable = ['nom', 'prenom', 'age' , 'profession', 'sexe', 'nivSc', 'etatme', 'vie'];
    use HasFactory;
}
