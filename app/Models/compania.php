<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compania extends Model
{
    public $table="compania";
    public $timestamps = false; 
    use HasFactory;


    public function viajes(){
        return $this->belongsToMany('app/models/viaje','viaje_compania', 'id_compania', 'id_viaje');
    }
    public function cohetes(){
        return $this->hasMany('app/models/cohete');
    }


}
