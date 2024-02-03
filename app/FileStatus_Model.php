<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileStatus_Model extends Model
{
    protected $table='file_status';
    protected $primaryKey='id';
    protected $fillable=['banker_id','loan_type','user_id','document_collect','login_file','document_verification','personal_discussion','legail_process','loan_sention','disbursement','reason'];
    
}
