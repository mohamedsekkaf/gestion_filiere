<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    public $table ="elements";
    protected $fillable = ['id_element','nom_element','nom_mod','id_etabless','created_at','updated_at'];
}
