<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Wallet_Transaction_Model extends Model
{
    protected $table='wallet_transaction';
    protected $primaryKey='id';
    protected $fillable=['user_id','amount','credit_amount','debit_amount','date','status'];
	

}

?>