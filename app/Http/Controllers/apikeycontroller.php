<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\API_credential_Model;
use App\Comments_Model;
use App\Category_Model;
class apikeycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = API_credential_Model::get();
        return view('flight/admin/apikey/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('flight/admin/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   print_r($request);die;     
      
    }
      public function delete($id)
    {
       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $posts = Post_Categories_Model::where('id',$id)->first();
        // return view('flight/admin/category/update',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
    {
        $id= $request->input('id');
            $data['status']= $request->input('status');
			$contact_id = API_credential_Model::where('id',$id)->update($data);
        $flight =API_credential_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/apikey/index',compact('flight'));
    }
}