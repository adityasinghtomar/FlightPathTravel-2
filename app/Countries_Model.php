<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries_Model extends Model
{
    protected $table='tbl_countries';
    protected $primaryKey='id';
    protected $fillable=['sortname','name'];
    
}
