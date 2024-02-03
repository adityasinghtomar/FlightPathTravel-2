<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markup_Model extends Model
{
    protected $table='markup';
    protected $primaryKey='id';
    protected $fillable=['name','markup_amount'];
    
}
