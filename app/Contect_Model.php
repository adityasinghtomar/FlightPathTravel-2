<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contect_Model extends Model
{
    protected $table='contect';
    protected $primaryKey='id';
    protected $fillable=['name','mobile','home_mobile','email','address'];
    
}
