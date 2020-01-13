<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etaplissemment extends Model
{
    public $table ="etaplissemments";
    protected $fillable = ['id_etablessement','nom_etablessement','local_etablessement','image','created_at','updated_at'];
    
}
