<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;
use DB;
class CMSController extends Controller
{
    //
    public function index(){
		$cms=CMS::where('slug','=','explore-more')
		->get();
		return view('Admin.cms.index',compact('cms'));
	
}
public function create(){
	$cms=CMS::all();
		
	return view('Admin.cms.add',compact('cms'));
  
	
}
public function store(Request $request){
	$image=$request->file('image');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$image->move(public_path($up_location),$image_name);
	$cmsID=CMS::insert([
	'title'=>$request->title,
	'tagline'=>$request->tagline,
	'short_description'=>$request->short_description,
	'description'=>$request->description,
	'button'=>$request->button,
	'image'=>$image_name,
	]);

	$items = $request->all('cms');
	return redirect('/admin/aboutus');
	}
    public function edit($id)
	{
		$cms=CMS::where('slug','=','about-us')->first();
		//$cms=CMS::where('slug','=','about-us');
	//	return $cms;
		return view('Admin.cms.edit',compact('cms'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		//$res=CMS::find($request->id);
		$res=CMS::where('slug','=','about-us')->first();
		$res->title=$request->input('title');
        $res->button=$request->input('button');
		$res->tagline=$request->input('tagline');
		$res->short_description=$request->input('short_description');
		$res->description=$request->input('description');
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
		return redirect()->back()->with('success', 'Update Successfully');
		//return redirect('/admin/aboutus');
		}
    public function delete($id)
	{
		
		CMS::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
