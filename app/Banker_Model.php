<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banker_Model extends Model
{
    protected $table='banker';
    protected $primaryKey='id';
    protected $fillable=['name','email','password','bank_name','mobile'];
    
}
