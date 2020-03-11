<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deplome extends Model
{
    public $table ="deplomes";
    protected $fillable = ['id_deplome','nom_deplome','type_deplome','duree_deplome','nom_etap','created_at','updated_at'];
    
}
