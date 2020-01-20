<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $table ="modules";
    protected $fillable = ['id_module','nom_module','num_element','nom_fil','id_etabless','created_at','updated_at'];
}
