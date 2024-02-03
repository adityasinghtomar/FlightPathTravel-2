<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting_Model extends Model
{
    protected $table='setting';
    protected $primaryKey='id';
    protected $fillable=['name','status'];
    
}
