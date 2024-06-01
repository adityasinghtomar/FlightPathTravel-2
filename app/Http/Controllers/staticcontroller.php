<?php

namespace App\Http\Controllers;
use App\Post_Model;
use App\Top_Destination;
use Illuminate\Http\Request;
use App\testimonial_model;
use App\Hotel_City_Model;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;

class staticcontroller extends Controller
{
    public function aboutus()
    {
        
        return view('about_us');
    }
      public function search_hotel()
    {
        return view('search_hotel');
    }
      public function visaview()
    {
        return view('visa_search');
    }
      public function toursview()
    {
        return view('tours_search');
    }
     public function flightview()
    {
        return view('flight');
    }
     public function teams()
    {
        return view('team');
    }
     public function testimonials()
    {
        $review = testimonial_model::orderBy('id', 'ASC')->get();
        return view('testimonials',compact('review'));
    }
     public function faq()
    {
        return view('faq');
    }
    public function news()
    {
        $feature1 = Post_Model::where('is_featured', 'featured')->inRandomOrder()->limit(1)->get();
        $posts1 = Post_Model::orderBy('id', 'desc')->get();
        return view('news',compact('feature1','posts1'));
    }
    
    public function index()
    {
        //   $this->setCurrencySession();
       $destination = Top_Destination::inRandomOrder()->first();
       $destination1 = Top_Destination::orderBy('name', 'ASC')->limit(15)->get();
          $review = testimonial_model::orderBy('id', 'ASC')->get();
        $feature = Post_Model::where('is_featured', 'featured')->inRandomOrder()->limit(1)->get();
        $posts = Post_Model::orderBy('id', 'desc')->limit(4)->get();
         return view('auth/login',compact('posts','feature','destination','destination1','review'));
    }
    public function viewblog($slug)
    {
    
        $post = Post_Model::where('slug', $slug)->firstOrFail();
         $posts = Post_Model::orderBy('id', 'desc')->limit(4)->get();
  
        return view('blog-detail', compact('post','posts'));
    }
     public function viewdest($slug)
    {
    
        $post = Top_Destination::where('slug', $slug)->firstOrFail();
         $posts = Top_Destination::orderBy('id', 'desc')->limit(4)->get();
  
        return view('destination-detail', compact('post','posts'));
    }
    public function clearSearch(Request $request)
    {
        // Assuming 'search_term' is the name of your cookie
        Cookie::queue(Cookie::forget('search_term'));
        return response()->json(['message' => 'Search cleared']);
    }
    //  public function setCurrencySession()
    // {
    //     // Artisan::call('optimize');
    //     $sessionCondition = !session()->has('currency_rate_based_on_INR') && !session()->has('currecy_symbol');
    //     // $sessionCondition = false;
    //     // dd($sessionCondition,session()->all());
    //     if ($sessionCondition) 
    //     {
    //         $ip = request()->ip();
    //         $client = new Client();
    //         $response = $client->get("http://ip-api.com/json/{$ip}");
    //         $data = json_decode($response->getBody(), true);
    //         $countryCode = Config::get('currency');
    //         $countryCode = $countryCode[$data['country']];
    //         $currecyData = DB::table('currencies')->where('currency_code',$countryCode)->first(['symbols','related_to_INR']);
    //         $currecyRate = floatval($currecyData->related_to_INR);
    //         $currecySymbol = $currecyData->symbols;

    //         session(['country_code'=> $countryCode,'currency_rate_based_on_INR' => $currecyRate , 'currecy_symbol' => $currecySymbol]);
    //     }

    // }
    
    
    public function search(Request $request)
{
    $query = $request->get('query');
    $cities = Hotel_City_Model::where('name', 'like', "%{$query}%")
                ->orderBy('name', 'ASC')
                ->take(200) // Limit the number of results to avoid performance issues
                ->get(['name', 'CountryName', 'CountryCode']);

    return response()->json($cities);
}
    
    
}
