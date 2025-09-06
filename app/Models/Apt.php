<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apt extends Model
{
    protected $table = '_apt_phys';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nomD' , 'prenomD' , 'univ' , 'd' , 'etabliss', 'apte', 'file','idBenef' ]; 
    use HasFactory;
}
