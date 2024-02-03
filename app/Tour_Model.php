<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour_Model extends Model
{
    protected $table='tour'; 
    protected $primaryKey='id';
    protected $fillable=['tour_name','address','no_of_day','rating','reviewes','price','tax','other_facilities','tour_type','no_of_people','overview','image','included','excluded','itinerary','why_choose_us','images'];
    
}
