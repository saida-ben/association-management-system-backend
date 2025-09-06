<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'password','name','poste', 'picture'];  
    use HasFactory;
}
