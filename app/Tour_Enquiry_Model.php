<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour_Enquiry_Model extends Model
{
    protected $table='tour_enquiry';
    protected $primaryKey='id';
    protected $fillable=['destination','interested_in','Preferred_Category','Preferred_Depart_Date','Title','Full_name','Telephone','Email','Your_Message'];
    
}
