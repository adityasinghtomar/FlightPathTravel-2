<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class UserDetails_Model extends Model
{
    protected $table='user_details';
    protected $primaryKey='id';
    protected $fillable=['name','user_id','email','password','mobile','lname','role','commision','address','state','country','city','status'];
	

}

?>