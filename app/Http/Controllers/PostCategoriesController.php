<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\Post_Categories_Model;
use App\Comments_Model;
use App\Category_Model;
class PostCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = Post_Categories_Model::get();
        return view('flight/admin/category/index',compact('posts'));
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
       $data = array();
		$data['name'] = $request->input('title');
		$data['description'] = $request->input('desc');
		$data['parent_category'] = $request->input('parant');
		
       Post_Categories_Model::create($data);
         return back()->with('message','Story Deleted Successfully');
    }
      public function delete($id)
    {
        $delete = Post_Categories_Model::findOrFail($id);
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
        $posts = Post_Categories_Model::where('id',$id)->first();
        return view('flight/admin/category/update',compact('posts'));
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
       	$data['name'] = $request->input('title');
		$data['description'] = $request->input('desc');
		$data['parent_category'] = $request->input('parant');
        Post_Categories_Model::where('id', $id)->update($data);
    
        return back()->with('message', 'Author updated successfully');
    }
}