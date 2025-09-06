<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'id';
    protected $fillable = ['cinT', 'nomT' , 'prenomT', 'adress', 'professionT', 'telT'];
    use HasFactory;
}
