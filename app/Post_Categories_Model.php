<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Categories_Model extends Model
{
    protected $table='post_categories';
    protected $primaryKey='id';
    protected $fillable=['name','description','parent_category'];
    
}
