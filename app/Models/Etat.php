<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $table = '_att_etat_civil';
    protected $primaryKey = 'id';
    protected $fillable = ['off', 'th','dC', 'C','file','idBenef'];
    use HasFactory;
}
