<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_Model extends Model
{
    protected $table='posts';
    protected $primaryKey='id';
    protected $fillable=['category','story_name','story_type'];
	
	public function user(){
		return $this->belongsTo(User_Model::class,'user_id');
	}
}
