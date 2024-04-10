<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline_Source_Model extends Model
{
    protected $table='airline_source';
    protected $primaryKey='id';
    protected $fillable=['source_id','source_name'];
    
}
