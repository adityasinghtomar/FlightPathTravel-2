<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\Post_Authors_Model;
use App\Category_Model;
class PostAutherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post_Authors_Model::get();
        return view('flight/admin/author/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('flight/admin/author/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
		$data['name'] = $request->input('title');
		$data['email'] = $request->input('email');
		$data['bio'] = $request->input('bio');
		
       Post_Authors_Model::create($data);
        return  redirect('flight/admin/author/index');
    }
      public function delete($id)
    {
       $delete = Post_Authors_Model::findOrFail($id);
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
        $posts = Post_Authors_Model::where('id',$id)->first();
        return view('flight/admin/author/update',compact('posts'));
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
    $data['email'] = $request->input('email');
    $data['bio'] = $request->input('bio');

    Post_Authors_Model::where('id', $id)->update($data);

    return back()->with('message', 'Author updated successfully');
}
}