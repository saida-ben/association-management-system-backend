<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scolarite extends Model
{
    protected $table = '_attestation_scolar';
    protected $primaryKey = 'id';
    protected $fillable = ['dateS','RaisonS','remarques'];
    use HasFactory;
}
