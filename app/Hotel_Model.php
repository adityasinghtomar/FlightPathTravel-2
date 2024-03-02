<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_Model extends Model
{
    protected $table='hotel';
    protected $primaryKey='id';
    protected $fillable=['name','user_id','lname','booking_status','confimation_no','booking_id','email','mobile','amount'];
    
}
