<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feliere extends Model
{
    public $table ="felieres";
    protected $fillable = ['id_filiere','nom_filiere','nummodel','id_etabless','created_at','updated_at'];
}
