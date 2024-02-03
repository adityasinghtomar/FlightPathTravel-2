<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight_Log_Model extends Model
{
    protected $table='flight_log';
    protected $primaryKey='id';
    protected $fillable=['trace_id','f_from','f_to','date_time'];
    
}
