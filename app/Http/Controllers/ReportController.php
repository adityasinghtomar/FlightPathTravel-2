<?php

namespace App\Http\Controllers;
use Mail; 
use Illuminate\Http\Request;
use App\Category_Model;
use App\State_Model;
use App\City_Model;
use App\Countries_Model;
use App\Airport_Model;
use App\FileStatus_Model;
use App\UserDetails_Model;  
use App\Flight_Model;
use App\Hotel_Model;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function flight_report()
    {
        $flight =Flight_Model::get();
        return view('flight/admin/db-flight-report',compact('flight'));
    }
    
     public function hotel_report()
    {
        $flight = Hotel_Model::get();
        return view('flight/admin/db-hotel-report',compact('flight'));
    }
    
}