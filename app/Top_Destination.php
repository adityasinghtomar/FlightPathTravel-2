<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Top_Destination extends Model
{
    protected $table='top_destinations';
    protected $primaryKey='id';
    protected $fillable=['name','title','description','status','image','slug'];
    
}
