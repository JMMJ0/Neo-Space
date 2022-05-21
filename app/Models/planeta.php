<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planeta extends Model
{
    public $table="planeta";
    public $timestamps = false; 
    use HasFactory;

    public function viajes(){
        return $this->hasMany('app/models/viaje');
    }
}
