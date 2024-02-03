<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_Model;
use App\FileStatus_Model;
use App\UserDetails_Model;

class FileStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::orderBy('id','Desc')->get();
        return view('admin/file_status/index',compact('categories','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
   
    public function edit($id)
    {
        $category = FileStatus_Model::where('id','=',$id)->first();
        return view('admin/theme/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
	//Api Functions
	public function file_status(Request $request,$id){
		
		$result =FileStatus_Model::where('user_id',$id)->get();
			$response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'result'=>$result
                ];
    
            return response()->json($response, 200);
		
		
	}
	
	
}
