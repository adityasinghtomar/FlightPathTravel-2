<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api_Model extends Model
{
    protected $table='api_setting';
    protected $primaryKey='id';
    protected $fillable=['name','status','api','api_name','booking_api','api_type'];
    
}
