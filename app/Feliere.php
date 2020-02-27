<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feliere extends Model
{
    public $table ="felieres";
    protected $fillable = ['id_filiere','nom_filiere','nummodel','nom_etabless','nom_sem','nom_fil','created_at','updated_at'];
}
