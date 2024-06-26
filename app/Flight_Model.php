<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight_Model extends Model
{
    protected $table='flight';
    protected $primaryKey='id';
    protected $fillable=['email','TicketChangeRequestId','ticket_cancel_request_send_status_','booking_status','payment_id','name','user_id','lname','pnr_no','booking_id','amount','ticket_date','origin','destination','trace_id','AirlineCode','DepTime','ArrTime','tds','gst','service_tex'];
    
}
