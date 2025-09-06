<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exon extends Model
{
    protected $table = '_exoneration_frais';
    protected $primaryKey = 'id';
    protected $fillable = [ 'datEx','lieuEx', 'idBenef','file'];
    use HasFactory;
}
