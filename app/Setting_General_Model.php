<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting_General_Model extends Model
{
    protected $table='general_setting';
    protected $primaryKey='id';
    protected $fillable=['name','status'];
    
}
