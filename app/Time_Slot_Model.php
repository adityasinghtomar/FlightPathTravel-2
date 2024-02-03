<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_Slot_Model extends Model
{
    protected $table='time_slots';
    protected $primaryKey='id';
    protected $fillable=['slot_date','slot_start_time','slot_end_time','slot_status'];
}
