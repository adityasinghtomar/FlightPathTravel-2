<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency_Model extends Model
{
    protected $table='currency';
    protected $primaryKey='id';
    protected $fillable=['currency_code','currency_name','currency_symbol','status','currency_rates','currency_active'];
    
}
