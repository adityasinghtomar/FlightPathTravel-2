<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon_Model extends Model
{
    protected $table='coupon';
    protected $primaryKey='id';
    protected $fillable=['coupon_code','description','coupon_type','amount','user_id','minimum_amount','status','start_date','end_date'];
    
}
