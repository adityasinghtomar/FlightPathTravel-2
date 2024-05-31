<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Static_Hotel_Model extends Model
{
    protected $table='static_hotel';
    protected $primaryKey='id';
    protected $fillable=['BrandCode','TBOHotelCode','HotelCityCode','HotelName','LocationCategoryCode','Latitude','Longitude','AddressLine','CityName','PostalCode','StateProv','CountryName','Provider','Rating','ReviewURL','Policy','Attributes'];
    
}
