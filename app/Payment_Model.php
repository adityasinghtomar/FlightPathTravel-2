<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Model extends Model
{
    protected $table='payment';
    protected $primaryKey='id';
    protected $fillable=['payment_id','payment_type','amount','payment_for'];
}
