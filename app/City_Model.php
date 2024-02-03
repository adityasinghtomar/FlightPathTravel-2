<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City_Model extends Model
{
    protected $table='cities';
    protected $primaryKey='id';
    protected $fillable=['name','state_id'];
    
}
