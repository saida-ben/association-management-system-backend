<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{   
    protected $table = '_certificatde_log';
    protected $primaryKey = 'id';
    protected $fillable = ['responsable',  'DateL','file','idBenef'];
    use HasFactory;
}

          
          
           
         
          
         