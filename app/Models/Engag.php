<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engag extends Model
{
    protected $table = '_engag';
    protected $primaryKey = 'id';
    protected $fillable = [ 'idBenef','date','lieu','file' ];
    use HasFactory;
}
