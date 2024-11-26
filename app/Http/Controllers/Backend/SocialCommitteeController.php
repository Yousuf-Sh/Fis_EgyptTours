<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialCommittee;
class SocialCommitteeController extends Controller
{
    //
    public function index(){
        $committee=SocialCommittee::all();
		return view('Admin.pages-socialCommittee',compact('committee'));
	
}
public function create(){
	return view('Admin.socialCommittee-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     SocialCommittee::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/social-committee');
	}
    public function edit($id)
	{
		$committee=SocialCommittee::findOrFail($id);
		return view('Admin.socialCommittee-form-edit',compact('committee'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=SocialCommittee::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/social-committee');

		}
public function delete($id)
	{
        SocialCommittee::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
