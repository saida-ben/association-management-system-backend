<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refus extends Model
{
        
    protected $table = '_refuses';
    protected $primaryKey = 'id';
    protected $fillable = [ 'num' , 'idenq' ]; 
    use HasFactory;
}
