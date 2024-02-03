<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting_Api_Model extends Model
{
    protected $table='api_setting';
    protected $primaryKey='id';
    protected $fillable=['name','status'];
    
}
