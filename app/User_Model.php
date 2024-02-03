<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Model extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['name','email','password','mobile_no','role','country','otp','is_otp_varified','is_varified','nationality','email_verified_at','business_category','fcm_api_key','fcm_id','accept_terms','description','insta_id','snapchat_id','user_image','profile_likes'];
    
    public function user_role(){
        return $this->belongsTo(Role_Model::class,'role','id');
    }
	public function category(){
        return $this->belongsTo(Category_Model::class,'business_category','id');
    }
	public function user_details(){
        return $this->hasOne(UserDetails_Model::class,'user_id','id');
    }
}
