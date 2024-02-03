<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Visa_Booking_Model extends Model
{
    protected $table='visa_booking';
    protected $primaryKey='id';
    protected $fillable=['booking_id','visa_name','visa_package_name','visa_type','duration','overview','image','currency_type','include','exclude','visa_amount','visa_package_amount','name','lname','email','mobile','address','documents'];
	

}

?>