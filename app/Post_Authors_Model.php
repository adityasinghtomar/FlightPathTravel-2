<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Authors_Model extends Model
{
    protected $table='post_authors';
    protected $primaryKey='id';
    protected $fillable=['name','email','bio'];
    
}
