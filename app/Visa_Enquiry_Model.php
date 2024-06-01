<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa_Enquiry_Model extends Model
{
    protected $table='visa_enquiry';
    protected $primaryKey='id';
    protected $fillable=['Country','Visa_type','Title','full_name','email','mobile','message'];
    
}
