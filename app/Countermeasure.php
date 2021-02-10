<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countermeasure extends Model
{
    protected $table = 'countermeasure';
    public $timestamps = false;

    protected $fillable = ['countermeasure_code','countermeasure_name','description','remarks','other'];
}
