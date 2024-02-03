<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contect_Us_Model extends Model
{
    protected $table='contact_us'; 
    protected $primaryKey='id';
    protected $fillable=['fname','lname','email','mobile','message'];
    
}
