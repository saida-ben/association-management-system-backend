<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    protected $table = '_attestationsortie';
    protected $primaryKey = 'numAS';
    protected $fillable = ['numAS','dateAS','remarque','file'];
    use HasFactory;
}
