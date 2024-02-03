<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commision_Model extends Model
{
    protected $table='commision';
    protected $primaryKey='id';
    protected $fillable=['name','commision','commision_type','commision_for'];
    
}
