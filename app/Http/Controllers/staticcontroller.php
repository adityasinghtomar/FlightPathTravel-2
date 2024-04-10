<?php

namespace App\Http\Controllers;
use Mail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class staticController extends Controller
{
   
     public function aboutus()
    {
       
        return view('about_us');
    }
    
   
}