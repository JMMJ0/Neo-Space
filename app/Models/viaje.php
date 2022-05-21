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
        return $this->belongsToMany('app/models/Users','usuario_viajes', 'id_viaje', 'id_usuario');
    }
    public function companias(){
        return $this->belongsToMany('app/models/compania','viaje_compania', 'id_viaje', 'id_compania');
    }
    public function destinos(){
        return $this->belongsTo('app/models/planeta');
    }
}
