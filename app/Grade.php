<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';

    protected $fillable = ['grade_code','grade_name','description','remarks','others'];
}
