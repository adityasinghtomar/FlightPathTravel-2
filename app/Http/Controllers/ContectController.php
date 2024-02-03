<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_Model;
use App\Contect_Model;
use App\UserDetails_Model;

class ContectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $user = UserDetails_Model::get()->pluck('name','id');
        $categories = Contect_Model::orderBy('id','Desc')->get();
        return view('admin/contact/index',compact('categories','user'));
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
		Contect_Model::create($data);
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
        $category = Contect_Model::where('id','=',$id)->first();
        return view('admin/theme/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     public function contact_update(Request $request, $id)
    {
        
        $data['name'] = $request->input('name');
		$data['mobile'] = $request->input('mobile_no2');
		$data['home_mobile'] = $request->input('mobile_no2');
		$data['email'] = $request->input('address');
		$data['address'] = $request->input('email');
		
		
        Contect_Model::where('id',$id)->update($data);
        $categories = Contect_Model::orderBy('id','Desc')->get();
        return view('admin/contact/index',compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Contect_Model::findOrFail($id);
    //     $image = public_path().'/'.$delete->category_image;
    //     if($delete->delete()){
    //         if(file_exists($image)){
				// unlink($image);
    //         }
    //     }
        return back()->with('message','Addiction Deleted Successfully');
    }
	
	//Api Functions
	public function get_contact(Request $request){
			$contact =Contect_Model::get();		
			$response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'contact'=>$contact
                ];
    
            return response()->json($response, 200);
		
		
	}
	
	
}
