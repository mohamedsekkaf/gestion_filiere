<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semstr extends Model
{
    public $table ="semstrs";
    protected $fillable = ['id','nom_s','nom_file','nom_etabless','created_at','updated_at'];
    
}
