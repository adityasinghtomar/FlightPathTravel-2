<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting_Flight_Model extends Model
{
    protected $table='flight_setting';
    protected $primaryKey='id';
    protected $fillable=['name','status'];
    
}
