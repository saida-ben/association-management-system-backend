<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vi extends Model
{
    protected $table = '_vie_coll';
    protected $primaryKey = 'num';
    protected $fillable = ['datcol','lieucol','idBenef','file'];
    use HasFactory;
}
