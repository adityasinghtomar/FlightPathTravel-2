<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_City_Model extends Model
{
    protected $table='hotel_cities';
    protected $primaryKey='id';
    protected $fillable=['name','city_id'];
    
}
