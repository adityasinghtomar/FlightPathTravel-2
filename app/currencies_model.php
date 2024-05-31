<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currencies_model extends Model
{
    protected $table='currencies';
    protected $primaryKey='id';
    protected $fillable=['currency_code', 'currency_name', 'symbols', 'symbol_native', 'country', 'related_to_INR', 'decimal_digits', 'status', 'currency_active', 'currency_rates'];
    
}
