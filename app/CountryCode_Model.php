<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries_Model extends Model
{
    protected $table='country';
    protected $primaryKey='id';
    protected $fillable=['iso','name','nicename','iso3','numcode','phonecode'];
    
}
