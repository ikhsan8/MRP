<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    public $timestamps = false;

    protected $fillable = ['unit_code','unit_name','description','remarks','orther'];
}
