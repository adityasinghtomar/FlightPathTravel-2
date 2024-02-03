<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_Model;
use App\Privacy_Model;
use App\UserDetails_Model;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $user = UserDetails_Model::get()->pluck('name','id');
        $categories = Privacy_Model::orderBy('id','Desc')->get();
        return view('admin/privacy/index',compact('categories','user'));
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
     
    public function theme_data1(Request $request)
    {
        $data = array();
		$data['theme_name'] = $request->input('theme_name');
			if($request->file('theme_image')){
            $image = $request->file('theme_image');
            if($image->isValid()){
                $extension = $image->getClientOriginalExtension();
                $fileName = rand(100,999999).time().'.'.$extension;
                $large_image_path = public_path('admin/images/charactor');
                
                $request->theme_image->move($large_image_path, $fileName);
                
                $data['theme_image'] = 'admin/images/theme/'.$fileName;
            }
        }
		Privacy_Model::create($data);
        return back()->with('message','Theme Added Successfully');
 		print_r($data);die; 
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
        $category = Privacy_Model::where('id','=',$id)->first();
        return view('admin/theme/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     public function privacy_update(Request $request, $id)
    {
       
        $data['privacy'] = $request->input('privacy');
		
		
		
		
        Privacy_Model::where('id',$id)->update($data);
        $categories = Privacy_Model::orderBy('id','Desc')->get();
        return view('admin/privacy/index',compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Privacy_Model::findOrFail($id);
    //     $image = public_path().'/'.$delete->category_image;
    //     if($delete->delete()){
    //         if(file_exists($image)){
				// unlink($image);
    //         }
    //     }
        return back()->with('message','Addiction Deleted Successfully');
    }
	
	//Api Functions
	public function get_privacy(Request $request){
					$privacy =Privacy_Model::get();		
			$response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'policy'=>$privacy
                ];
    
            return response()->json($response, 200);
		
		
	}
	
	
}
