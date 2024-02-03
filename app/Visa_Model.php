<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Visa_Model extends Model
{
    protected $table='visa';
    protected $primaryKey='id';
    protected $fillable=['visa_name','visa_type','duration','overview','documents','include','exclude','why_choose_us','amount','image','currency_type'];
	

}

?>