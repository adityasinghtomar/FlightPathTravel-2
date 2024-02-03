<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor_Ad_Model extends Model
{
    protected $table='sponsor_ad';
    protected $primaryKey='id';
    protected $fillable=['image','link','start_date','expiry_date'];
}
