<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';
    public $timestamps = false;
    protected $fillable = ['place_code','place_name','description','remarks','other'];
}
