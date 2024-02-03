<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Visa_Package_Model extends Model
{
    protected $table='visa_package';
    protected $primaryKey='id';
    protected $fillable=['visa_id','visa_package','package_details','amount'];
	

}

?>