<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $table ="modules";
    protected $fillable = ['id_module','nom_module','num_element','nom_fil','nom_etabless','nom_se','created_at','updated_at'];
}
