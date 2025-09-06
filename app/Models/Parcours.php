<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
    protected $table = '_parcours_scolaire';
    protected $primaryKey = 'id';
    protected $fillable = ['etabliss', 'nivSc', 'annSc', 'MS1', 'MS2', 'MG', 'decisionM','idBenef','file'];
    use HasFactory;
}
