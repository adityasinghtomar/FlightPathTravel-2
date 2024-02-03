<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State_Model extends Model
{
    protected $table='states';
    protected $primaryKey='id';
    protected $fillable=['name','country_id'];
    
}
