<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class API_credential_Model extends Model
{
    protected $table='api_credentials';
    protected $primaryKey='id';
    protected $fillable=['api_name','ClientId','UserName','Password','EndUserIp'];
    
}
