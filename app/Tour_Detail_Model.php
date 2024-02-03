<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour_Detail_Model extends Model
{
    protected $table='tour_details'; 
    protected $primaryKey='id';
    protected $fillable=['tour_id','tour_package_name','details','amount'];
    
}
