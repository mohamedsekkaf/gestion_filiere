<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deplome extends Model
{
    public $table ="deplomes";
    protected $fillable = ['nom_deplome','type_deplome','duree_deplome','nometablessent','id_etap'];
}
