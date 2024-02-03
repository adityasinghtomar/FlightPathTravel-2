<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Wallet_Model extends Model
{
    protected $table='wallet';
    protected $primaryKey='id';
    protected $fillable=['user_id','amount','credit_amount','debit_amount'];
	

}

?>