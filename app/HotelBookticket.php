<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelBookticket extends Model
{
    protected $table = 'ticket _hotel_book'; // Make sure the table name is correct without spaces
    protected $primaryKey = 'id';
    protected $fillable = [
       'name', 'lname', 'email', 'mobile', 'ResultIndex', 'Hotelname', 'TraceId', 'token_id', 'EndUserIp', 'HotelCode', 'RoomIndex',
       'RoomTypeName', 'RoomTypeCode', 'RatePlanCode', 'SmokingPreference', 'CurrencyCode', 'RoomPrice', 'Tax', 'ExtraGuestCharge',
       'ChildCharge', 'OtherCharges', 'Discoun', 'PublishedPrice', 'PublishedPriceRoundedOff', 'OfferedPrice', 'OfferedPriceRoundedOff', 
       'AgentCommission', 'AgentMarkUp', 'TDS','Transaction_id', 'ServiceTax'
    ];

    // Optionally, you can define mutator methods here if needed
}
