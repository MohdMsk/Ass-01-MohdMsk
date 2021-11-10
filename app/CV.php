<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    public $table = "cvs";
    protected $fillable = [
        'name', 'email','spec','year','pwork'
    ];
}




