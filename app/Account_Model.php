<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_Model extends Model
{
    protected $table='account_details';
    protected $primaryKey='id';
    protected $fillable=['user_id','account_no','ifsc_code','account_holder_name','passbook_image'];
    
}
