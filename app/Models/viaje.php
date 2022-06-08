<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class viaje extends Model
{
    public $table="viaje";
    public $timestamps = false; 
    use HasFactory;

    public function usuarios(){
        return $this->belongsToMany('App\Models\Users','usuario_viaje', 'id_viaje', 'id_usuario')->get();
    }
    public function companias(){
        return $this->belongsToMany('App\Models\compania','viaje_compania', 'id_viaje', 'id_compania')->withPivot('id_viaje','id_compania');
    }
    public function destinos(){
        return $this->belongsTo('App\Models\planeta')->get();
    }
}
