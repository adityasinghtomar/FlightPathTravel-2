<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\Post_Model;
use App\Comments_Model;
use App\Category_Model;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post_Model::get();
        return view('flight/admin/post/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // echo"<pre>";
        // print_r($addiction);die;
        return view('flight/admin/post/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

    // Generate slug from the title
    $slug = Str::slug($request->title);

    // Move the file and get its name
    if ($request->hasFile('featured_image_url')) {
        $file = $request->file('featured_image_url');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("images"), $name);
    }

    // Create data array
    $data = [
        'title' => $request->input('title'),
        'slug' => $slug, // Assign the generated slug to the 'slug' key
        'content' => $request->input('content'),
        'author_id' => $request->input('author_id'),
        'category_id' => $request->input('category_id'),
        'is_featured' => $request->input('is_featured'),
        'status' => $request->input('status'),
        'featured_image_url' => $name ?? null, // Assign the file name if it exists
    ];

    // Create a new post
    Post_Model::create($data);

    // Get posts and return the view
    // $posts = Post_Model::get();
            return back()->with('success','Data added successfully..!');
        // return view('flight/admin/post/index',compact('posts')); 
    }
      public function delete($id)
    {
        $delete = Post_Model::findOrFail($id);
        $delete->delete();
        $posts = Post_Model::get();
        return view('flight/admin/post/index',compact('posts'));
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
        $posts = Post_Model::where('id',$id)->first();
        return view('flight/admin/post/update',compact('posts'));
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
       $data = array();
        $id =$request->input('id');
		$data['title'] = $request->input('title');
		$data['content'] = $request->input('content');
		$data['author_id'] = $request->input('author_id');
		$data['category_id'] = $request->input('category_id');
		$data['slug'] = $request->input('slug');
		$data['is_featured'] = $request->input('is_featured');
		$data['status'] = $request->input('status');
		if ($request->hasFile('featured_image_url')) {
            $file = $request->file('featured_image_url');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('featured_image_url')->move("public/images", $name);
             $data['featured_image_url'] = $name;
            }
           
		
        
	    Post_Model::where('id','=',$id)->update($data);
        $posts = Post_Model::get();
        return view('flight/admin/post/index',compact('posts'));
		
    }
}