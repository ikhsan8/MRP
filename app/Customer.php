<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = ['customer_code','customer_name','address','phone','email','website','description','remarks','others'];
}
