<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class benef extends Model
{    
    protected $table = 'benef';
    protected $primaryKey = 'id';
    protected $fillable = [ 'num' , 'idenq' ]; 
    use HasFactory;
}
