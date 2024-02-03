<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour_Booking_Model extends Model
{
    protected $table='tour_booking'; 
    protected $primaryKey='id';
    protected $fillable=['name','lname','email','mobile','address','tour_pavkage_id','tour_id'];
    
}
