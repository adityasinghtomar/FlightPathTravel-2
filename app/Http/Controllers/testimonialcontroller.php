<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\testimonial_model;
use App\Comments_Model;
use App\Category_Model;
class testimonialcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = testimonial_model::get();
        return view('flight/admin/testimonial/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('flight/admin/testimonial/create');
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
       $data = array();
		$data['name'] = $request->input('name');
		$data['title'] = $request->input('title');
		$data['content'] = $request->input('content');
			$data['ratting'] = $request->input('rating');
       testimonial_model::create($data);
         return back()->with('message',' store Successfully');
    }
      public function delete($id)
    {
        $delete = testimonial_model::findOrFail($id);
        $delete->delete();
        return back()->with('message',' store Successfully');
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
        $posts = testimonial_model::where('id',$id)->first();
        return view('flight/admin/testimonial/update',compact('posts'));
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
        $id = $request->input('id'); // Retrieve the id from the request
       	$data['name'] = $request->input('name');
		$data['title'] = $request->input('title');
		$data['content'] = $request->input('content');
			$data['ratting'] = $request->input('rating');
        testimonial_model::where('id', $id)->update($data);
    
        return back()->with('message', ' updated successfully');
    }
}