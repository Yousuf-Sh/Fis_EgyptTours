<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisteredMembers;
use App\Models\Country;
use Auth;
use Hash;
class RegisteredMembersController extends Controller
{
    //
    public function index(){
		
		$profile=RegisteredMembers::all();
		$country=Country::all();
		return view('Admin.registered-members.index',compact('profile','country'));
	
}

public function create(){
	$profile=RegisteredMembers::all();
	$country=Country::all();
	return view('Admin.registered-members.add',compact('profile','country'));
  
	
}
public function store(Request $request){
	//dd($request);
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);

	 $hashed = Hash::make($request->password);
	 RegisteredMembers::insert([
	
    'name'=>$request->name,
    'company'=>$request->company,
    'country_id'=>$request->country_id,
    'address'=>$request->address,
    'phone'=>$request->phone,
	'email'=>$request->email,
	'password'=>$hashed,
	'image'=>$image_name,
	]);
	return redirect('admin/registered-members');
	}
    public function edit($id)
	{
		$profile=RegisteredMembers::findOrFail($id);
		$country=Country::all();
		return view('Admin.registered-members.edit',compact('profile','country'));
	}
    public function update(Request $request){
		$res=RegisteredMembers::find($request->id);
		$res->name=$request->input('name');
        $res->company=$request->input('company');
		$res->country_id=$request->input('country_id');
		$res->address=$request->input('address');
		$res->phone=$request->input('phone');
		$res->email=$request->input('email');
		$password=$request->input('password');
		if($password){
			$res->password = Hash::make($password);
		}
		
		$image=$request->file('image');
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
        $res->save();
		return redirect('admin/registered-members');
		}
		public function view($id){
			$member=RegisteredMembers::where('id',$id)->first();
			 return view('Admin.registered-members.details',compact('member'));
		}
    public function delete($id)
	{
		
		RegisteredMembers::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
