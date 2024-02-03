<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\Comments_Model;
use App\Category_Model;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts_Model::get();
        $addiction = Category_Model::get(["category_name"]);
        return view('admin/post/index',compact('posts','addiction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $posts = Posts_Model::get();
        $category = Category_Model::get(["category_name"]);
        // echo"<pre>";
        // print_r($addiction);die;
        return view('admin/post/create',compact('posts','category'));
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
		$data['category'] = $request->input('category');
		$data['story_name'] = $request->input('story_name');
		$data['story_type'] = $request->input('story_type');
		
		
        Posts_Model::create($data);
        return back()->with('message','Story Added Successfully');
    }
      public function delete($id)
    {
        $delete = Posts_Model::findOrFail($id);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
		$data['category'] = $request->input('category');
		$data['story_name'] = $request->input('story_name');
		$data['story_type'] = $request->input('story_type');
		
	    Posts_Model::where('id','=',$id)->update($data);
        
        return back()->with('message','Story Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	
	//Api functions
// 	Add Story
 	public function add_story(Request $request)
    {
        $data = array();
    //   print_r($data);
        
        $data['category'] = $request->input('category');
        $data['story_name'] = $request->input('story_name');
        $data['story_type'] = $request->input('story_type');
        $register_id = Posts_Model::create($data)->id;
				
		
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                ];
    
                return response()->json($response, 200);
          
    }
    
    // get story by category
     	public function get_story_by_category(Request $request,$category)
    {
       
        $data = array();
        
      $story = Posts_Model::where('category','=',$id)->get();
            if($story){
                 
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'achievement'=>$story,
                ];
    
                return response()->json($response, 200);
            }
            else{
                 $response = [
                    'status' => false,
                    'status_code' => 400,
                    'message' => 'not found'
                 
                ];
    
                return response()->json($response, 200);
        
            }
            
    }
}
