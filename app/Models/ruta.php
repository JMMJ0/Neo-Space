<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    public $table="ruta";
    public $timestamps = false; 
    use HasFactory;

    public function companias(){
        return $this->belongsToMany('app/models/compania','compania_ruta', 'id_ruta', 'id_compania');
    }
    public function planetas(){
        return $this->belongsToMany('app/models/planeta','ruta_planeta', 'id_ruta', 'id_planeta');
    }
}
