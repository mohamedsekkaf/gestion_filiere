<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etaplissemment extends Model
{
    public $table ="etaplissemments";
    protected $fillable = ['nom','local','num_feliere'];
    
}
