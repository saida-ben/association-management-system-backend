<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class besoin extends Model
{
    protected $table = '_besoin';
    protected $primaryKey = 'id';
    protected $fillable = [  'dB' , 'lieu','idBenef','cin','file']; 
    use HasFactory;
}
