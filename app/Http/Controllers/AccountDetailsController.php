<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_Model;
use App\Account_Model;
use App\UserDetails_Model;

class AccountDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $user = UserDetails_Model::get()->pluck('name','id');
        $categories = Account_Model::orderBy('id','Desc')->get();
        return view('admin/account/index',compact('categories','user'));
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
  
     

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'theme_name'=>'required',
        ]);
        $data['theme_name'] = $request->input('theme_name');
		
		if($request->file('theme_image')){
            $image = $request->file('theme_image');
            if($image->isValid()){
				$old_image = public_path().'/'.$request->input('image');
				if(file_exists($old_image)){
					unlink($old_image);
				}
				
                $extension = $image->getClientOriginalExtension();
                $fileName = rand(100,999999).time().'.'.$extension;
                $large_image_path = public_path('admin/images/charactor');
                
                $request->theme_image->move($large_image_path, $fileName);
                
                $data['image'] = 'admin/images/charactor/'.$fileName;
            }
        }
		
		
        Account_Model::where('id',$id)->update($data);
        return back()->with('message','Character Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Account_Model::findOrFail($id);
    //     $image = public_path().'/'.$delete->category_image;
    //     if($delete->delete()){
    //         if(file_exists($image)){
				// unlink($image);
    //         }
    //     }
        return back()->with('message','Addiction Deleted Successfully');
    }
	
	//Api Functions
	public function add_account_details(Request $request){
	$data['account_holder_name'] = $request->input('account_holder_name');
		$data['ifsc_code'] = $request->input('ifsc_code');
			$data['account_no'] = $request->input('account_no');
				$data['user_id'] = $request->input('user_id');
			if($request->file('passbook_image')){
            $image = $request->file('passbook_image');
            if($image->isValid()){
                $extension = $image->getClientOriginalExtension();
                $fileName = rand(100,999999).time().'.'.$extension;
                $large_image_path = public_path('admin/images/account');
                
                $request->passbook_image->move($large_image_path, $fileName);
                
                $data['passbook_image'] = 'admin/images/account/'.$fileName;
            }
        }
		Account_Model::create($data);
		$response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success'
                    
                ];
    
            return response()->json($response, 200);
		
		
	}
	
	
}
