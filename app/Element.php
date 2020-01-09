<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    public $table ="elements";
    protected $fillable = ['nom_element','id_mod'];
}
