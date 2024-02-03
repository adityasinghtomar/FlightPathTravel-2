<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_Details_Model extends Model
{
    protected $table='hotel_details';
    protected $primaryKey='id';
    protected $fillable=['hotel_name','hotel_image','hotel_address','hotel_rating','hotel_price'];
    
}
