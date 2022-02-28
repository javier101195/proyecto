<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carga_academica extends Model
{
    use HasFactory;
    protected $table = "carga_acedemica";
    
    public function User(){
        return $this->hasMany(User::class,'id');
    }

    public function materia(){
        return $this->hasMany(materia::class,'id');
    }
}
