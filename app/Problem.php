<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problem';
    public $timestamps = false;
    protected $fillable = ['problem_code','problem_name','description','remarks','orther'];
}
