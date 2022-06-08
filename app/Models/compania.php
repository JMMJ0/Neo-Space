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
        return $this->belongsToMany('App\Models\viaje','viaje_compania', 'id_compania', 'id_viaje')->withPivot('id_viaje','id_compania');
    }
    public function cohetes(){
        return $this->hasMany('App\Models\cohete')->get();
    }


}
