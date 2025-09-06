<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
        
    protected $table = '_acceptes';
    protected $primaryKey = 'id';
    protected $fillable = [ 'num' , 'idenq' ]; 
    use HasFactory;
}
