<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table ="comment";
    protected $fillable = ['id','nom','email','comment','date'];
}
