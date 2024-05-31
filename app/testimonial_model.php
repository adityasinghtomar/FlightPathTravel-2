<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial_model extends Model
{
    protected $table='testimonial';
    protected $primaryKey='id';
    protected $fillable=['name','title','content','ratting'];
    
}
