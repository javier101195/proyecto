<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;

    protected $table = "materias";

    public function carga_academica(){
        return $this->hasMany(carga_academica::class,'id');
    }


    public function maestro(){
        return $this->belongsTo(maestro::class,'id');
    }
}
