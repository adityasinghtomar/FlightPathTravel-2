<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commision_Add_Model extends Model
{
    protected $table='commision_add';
    protected $primaryKey='id';
    protected $fillable=['user_id','commision_id','commision_type'];
    
}
