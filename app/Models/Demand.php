<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = '_demande';
    protected $primaryKey = 'num';
    protected $fillable = ['num','nomT', 'prenomT' , 'cinT' , 'dateCin' , 'adress', 'role', 'nomRole', 'institut', 'lieuE', 'DatE', 'raison', 'autreR', 'MoyenneSc', 'nom', 'prenom'];
    use HasFactory;
}
