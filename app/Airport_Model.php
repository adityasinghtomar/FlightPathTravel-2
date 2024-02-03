<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport_Model extends Model
{
    protected $table='airport_list';
    protected $primaryKey='id';
    protected $fillable=['CITYNAME','CITYCODE','COUNTRYCODE','AIRPORTCODE','AIRPORTNAME','c_id'];
    
}
