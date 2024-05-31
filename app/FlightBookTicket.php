<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightBookTicket extends Model
{
    protected $table = 'ticket_flight_book'; // Make sure the table name is correct without spaces
    protected $primaryKey = 'id';
    protected $fillable = [
        'ResultIndex', 'TraceId', 'token_id', 'EndUserIp', 'BaseFare', 'Currency', 'Tax', 
        'YQTax', 'AdditionalTxnFeeOfrd', 'AdditionalTxnFeePub', 'OtherCharges', 'Discount', 
        'PublishedFare', 'TdsOnCommission', 'TdsOnPLB', 'TdsOnIncentive', 'ServiceFee', 
        'Destination_name', 'Destination_address', 'Source_name', 'Source_address', 'Duration', 
        'fname', 'lname', 'email', 'mobile', 'payment', 'transaction_id'
    ];

    // Optionally, you can define mutator methods here if needed
}
