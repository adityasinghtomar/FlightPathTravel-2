<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacy_Model extends Model
{
    protected $table='privacy';
    protected $primaryKey='id';
    protected $fillable=['privacy'];
    
}
