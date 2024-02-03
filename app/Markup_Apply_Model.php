<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markup_Apply_Model extends Model
{
    protected $table='markup_apply';
    protected $primaryKey='id';
    protected $fillable=['markup_id','user_id'];
    
}
