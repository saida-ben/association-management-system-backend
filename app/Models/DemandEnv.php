<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandEnv extends Model
{
    protected $table = 'Demande';
    protected $primaryKey = 'id';
    protected $fillable = ['nomT', 'prenomT' , 'cinT' , 'dateCin' , 'adress', 'role', 'nomRole', 'institut', 'lieuE', 'DatE', 'raison', 'autreR', 'MoyenneSc', 'nom', 'prenom'];
    use HasFactory;
}
