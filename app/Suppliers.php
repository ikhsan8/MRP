<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';

    protected $fillable = ['suppliers_code','suppliers_name','address','phone','email','website','description','remarks','others'];
}
