<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_Model extends Model
{
    protected $table='roles';
    protected $primaryKey='id';
    protected $fillable=['role_name'];
    
}
