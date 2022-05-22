<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cohete extends Model
{
    public $table="cohete";
    public $timestamps = false; 
    use HasFactory;


    public function companias(){
        return $this->belongsTo('App\Model\compania')->get();
    }
}
