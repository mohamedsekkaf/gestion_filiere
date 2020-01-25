<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    public $table ="semestres";
    protected $fillable = ['id','nom_s','created_at','updated_at'];
    
}
