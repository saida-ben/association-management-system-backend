<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraction extends Model
{
    protected $table = 'infraction';
    protected $primaryKey = 'id';
    protected $fillable = ['dateR','infraction','raisonI','decision','tempsI','nom','prenom','file'];
    use HasFactory;
}
