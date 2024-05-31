<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\Top_Destination;
use App\Comments_Model;
use App\Category_Model;
use Illuminate\Support\Str;
class detinationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = Top_Destination::get();
        return view('flight/admin/destination/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('flight/admin/destination/create');
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
       if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("destination"), $name);
    }

    // Create data array
     $slug = Str::slug($request->name);
    $data = [
        'title' => $request->input('title'),
         'slug' => $slug,
        'name' => $request->input('name'),
        'description' => $request->input('desc'),
        'status' => $request->input('status'),
        'image' => $name ?? null,
    ];

    // Create a new post
    Top_Destination::create($data);

    // Get posts and return the view
    // $posts = Post_Model::get();
            return back()->with('success','Data added successfully..!');
        // return view('flight/admin/post/index',compact('posts')); 
    }
      public function delete($id)
    {
        $delete = Top_Destination::findOrFail($id);
        $delete->delete();
        return back()->with('message','Story Deleted Successfully');
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
        $posts = Top_Destination::where('id',$id)->first();
        return view('flight/admin/destination/update',compact('posts'));
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
         $slug = Str::slug($request->name);
        $data = array();
        $id =$request->input('id');
		$data['name'] = $request->input('name');
		$data['title'] = $request->input('title');
		$data['description'] = $request->input('desc');
		$data['slug'] = $slug;
		$data['status'] = $request->input('status');
		if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->move("public/destination", $name);
             $data['image'] = $name;
            }
           
		
        
	    Top_Destination::where('id','=',$id)->update($data);
        $posts = Top_Destination::get();
        return view('flight/admin/destination/index',compact('posts'));
    }
}