<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'seance';
    protected $primaryKey = 'id';
    protected $fillable = ['dateR','seance','prof','presence','debutS','finS','nom','prenom'];
    use HasFactory;
}
