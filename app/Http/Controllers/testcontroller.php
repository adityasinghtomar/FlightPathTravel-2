<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class testcontroller extends Controller
{
    public function setCookie(Request $request)
    {
        $blade = $request->input('blade');
        
        // Set cookie
        $response = new Response('Cookie Set');
        $response->withCookie(cookie()->forever('blade', $blade)); // Set cookie
        
        return $response->withHeaders([
            'Location' => route('next-page')
        ]);
    }

    public function nextPage()
    {
        return view('next-page');
    }
}