<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Model extends Model
{
    protected $table='post';
    protected $primaryKey='id';
    protected $fillable=['title','content','author_id','category_id','slug','featured_image_url','is_featured','status'];
    
}
