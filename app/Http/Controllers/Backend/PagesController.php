<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\CMS;
use DB;
class PagesController extends Controller
{
    //
    public function index(){
		//return 'szfds';
		$cms=CMS::where('slug','=','explore-more')
		->get();
		return view('Admin.cmspages.index',compact('cms'));
	
}
public function create(){
	$cms=CMS::all();
		
	return view('Admin.cmspages.add',compact('cms'));
  
	
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
	'image'=>$image_name,
	]);

	$items = $request->all('cms');
	return redirect('admin/cms');
	}
    public function edit($id)
	{
		$cms=CMS::findOrFail($id);
		return view('Admin.cmspages.edit',compact('cms'));
	}
    public function update(Request $request){
		
		
		if($request->id=='111' || $request->id=='115'){
			$res=CMS::find($request->id);
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('logo')) {
				$res->logo = $request->input('logo');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			
			if ($request->has('title1')) {
				$res->title1 = $request->input('title');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline');
			}
			if ($request->has('logo1')) {
				$res->logo1 = $request->input('logo1');
			}
			if ($request->has('short_description1')) {
				$res->short_description1 = $request->input('short_description1');
			}
			if ($request->has('title2')) {
				$res->title2 = $request->input('title2');
			}
			if ($request->has('tagline2')) {
				$res->tagline2 = $request->input('tagline2');
			}
			if ($request->has('logo2')) {
				$res->logo2 = $request->input('logo2');
			}
			if ($request->has('short_description2')) {
				$res->short_description2 = $request->input('short_description2');
			}
			
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}

			// Update Arabic data
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}if ($request->has('arabic_logo1')) {
				$res->arabic_logo = $request->input('arabic_logo1');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
			if ($request->has('arabic_title1')) {
				$res->arabic_title1 = $request->input('arabic_title1');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_logo1')) {
				$res->arabic_logo1 = $request->input('arabic_logo1');
			}
			if ($request->has('arabic_short_description1')) {
				$res->arabic_short_description1 = $request->input('arabic_short_description1');
			}
			if ($request->has('arabic_title2')) {
				$res->arabic_title2 = $request->input('arabic_title2');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline2')) {
				$res->arabic_tagline2 = $request->input('arabic_tagline2');
			}
			if ($request->has('arabic_logo2')) {
				$res->arabic_logo2 = $request->input('arabic_logo2');
			}
			if ($request->has('arabic_short_description2')) {
				$res->arabic_short_description2 = $request->input('arabic_short_description2');
			}
			if ($request->hasFile('arabic_image')) {
				$images = $request->file('arabic_image');
//return $images;

				if ($images->isValid()) {
					$name_gen = hexdec(uniqid());
					$image_ext = strtolower($images->getClientOriginalExtension());
					$image_names = $name_gen . '.' . $image_ext;
					$up_location = 'Backend/images/';
					$last_img = $up_location . $image_names;
					$images->move(public_path($up_location), $image_names);
					$res->arabic_image = $image_names;
				}
			}
			
			
		}
		
	
		elseif($request->id=='113'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			$image1=$request->file('image1');
			//return $image;
		if ($image1) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image1->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image1->move(public_path($up_location),$image_name);
			$res->image1 = $image_name;
			}
		
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('short_description')) {
				
				$res->short_description= $request->input('short_description');
			}
			// Update Arabic data
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
			if ($request->has('tagline')) {
				
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				
				$res->tagline1 = $request->input('tagline1');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_short_description')) {
				
				$res->arabic_short_description= $request->input('arabic_short_description');
			}
			
		}
		elseif($request->id=='114'){
		//	dd($request->all());
			$res=CMS::find($request->id);
			//return $res;
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			
			if ($request->has('short_description')) {
				$res->short_description=$request->input('short_description');
			}
			
			//return $res->short_description;
			// Update Arabic data
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			// if ($request->has('arabic_tagline')) {
				//dd($res->toSql());
			// 	$res->arabic_tagline = $request->input('arabic_tagline');
			// }
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}

		}
		elseif($request->id=='117'){
			
			$res=CMS::find($request->id);
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			
		}
		elseif($request->id=='118'){
			
			$res=CMS::find($request->id);
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}

		}

		elseif($request->id=='119'){
			
			$res=CMS::find($request->id);
			// Update the fields for ID 113 or 114
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
			
		}

		elseif($request->id=='120'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
		}


		elseif($request->id=='121'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('tagline2')) {
				$res->tagline2 = $request->input('tagline2');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('short_description1')) {
				$res->short_description1 = $request->input('short_description1');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_tagline2')) {
				$res->arabic_tagline2 = $request->input('arabic_tagline2');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
			if ($request->has('arabic_short_description1')) {
				$res->arabic_short_description1 = $request->input('arabic_short_description1');
			}
		}

		elseif($request->id=='122'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('tagline2')) {
				$res->tagline2= $request->input('tagline2');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_tagline2')) {
				$res->arabic_tagline2 = $request->input('arabic_tagline2');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}
		}

		elseif($request->id=='123'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		}

		elseif($request->id=='132'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		}

		
		elseif($request->id=='133'){
			
			$res=CMS::find($request->id);
			$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
		}
			elseif($request->id=='124'){
			
				$res=CMS::find($request->id);
				//return $res;
				// Update the fields for ID 113 or 114
				$image=$request->file('image');
			//return $image;
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}

			$image1=$request->file('image1');
			//return $image;
		if ($image1) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image1->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image1->move(public_path($up_location),$image_name);
			$res->image1 = $image_name;
			}
				if ($request->has('title')) {
					$res->title = $request->input('title');
				}
				if ($request->has('tagline')) {
					$res->tagline = $request->input('tagline');
				}
				if ($request->has('tagline1')) {
					$res->tagline1 = $request->input('tagline1');
				}
				if ($request->has('short_description')) {
					$res->short_description = $request->input('short_description');
				}
				if ($request->has('arabic_title')) {
					$res->arabic_title = $request->input('arabic_title');
				}
			
		//	dd($request->all());
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			if ($request->has('arabic_tagline1')) {
				$res->arabic_tagline1 = $request->input('arabic_tagline1');
			}
			if ($request->has('arabic_short_description')) {
				$res->arabic_short_description = $request->input('arabic_short_description');
			}

		}

		elseif($request->id=='125'){
			
			$res=CMS::find($request->id);
			//return $res;
			// Update the fields for ID 113 or 114
			$image=$request->file('image');
		//return $image;
	if ($image) {
		$name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res->image = $image_name;
		}
		$image1=$request->file('image1');
		//return $image;
	if ($image1) {
		$name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image1->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image1->move(public_path($up_location),$image_name);
		$res->image1 = $image_name;
		}
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('title1')) {
				$res->title1 = $request->input('title1');
			}
			if ($request->has('title2')) {
				$res->title2 = $request->input('title2');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('tagline1')) {
				$res->tagline1 = $request->input('tagline1');
			}
			if ($request->has('tagline2')) {
				$res->tagline2 = $request->input('tagline2');
			}
			if ($request->has('tagline3')) {
				$res->tagline3 = $request->input('tagline3');
			}
			if ($request->has('short_description')) {
				$res->short_description = $request->input('short_description');
			}
			if ($request->has('short_description1')) {
				$res->short_description1 = $request->input('short_description1');
			}
			//return $res->short_description1 = $request->input('short_description1');
			if ($request->has('short_description2')) {
				$res->short_description2 = $request->input('short_description2');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
			if ($request->has('arabic_title1')) {
				$res->arabic_title1 = $request->input('arabic_title1');
			}
			//return $res->arabic_title1 = $request->input('arabic_title1');
			if ($request->has('arabic_title2')) {
				$res->arabic_title2 = $request->input('arabic_title2');
			}
	//	dd($request->all());
		if ($request->has('arabic_tagline')) {
			$res->arabic_tagline = $request->input('arabic_tagline');
		}
		if ($request->has('arabic_tagline1')) {
			$res->arabic_tagline1 = $request->input('arabic_tagline1');
		}
		if ($request->has('arabic_tagline2')) {
			$res->arabic_tagline2 = $request->input('arabic_tagline2');
		}
		if ($request->has('arabic_tagline3')) {
			$res->arabic_tagline3 = $request->input('arabic_tagline3');
		}
		if ($request->has('arabic_short_description')) {
			$res->arabic_short_description = $request->input('arabic_short_description');
		}
		if ($request->has('arabic_short_description1')) {
			$res->arabic_short_description1 = $request->input('arabic_short_description1');
		}
		if ($request->has('arabic_short_description2')) {
			$res->arabic_short_description2 = $request->input('arabic_short_description2');
		}
	}



	elseif($request->id=='126'){
			
		$res=CMS::find($request->id);
		//return $res;
		// Update the fields for ID 113 or 114
		$image=$request->file('image');
	//return $image;
if ($image) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	$res->image = $image_name;
	}
	$image1=$request->file('image1');
	//return $image;
if ($image1) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image1->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image1->move(public_path($up_location),$image_name);
	$res->image1 = $image_name;
	}
	$image2=$request->file('image2');
	//return $image;
if ($image2) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image2->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image2->move(public_path($up_location),$image_name);
	$res->image2 = $image_name;
	}

	$image3=$request->file('image3');
	//return $image;
if ($image3) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image3->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image3->move(public_path($up_location),$image_name);
	$res->image3 = $image_name;
	}
	$image4=$request->file('image4');
	//return $image;
if ($image4) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image4->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image4->move(public_path($up_location),$image_name);
	$res->image4 = $image_name;
	}
		if ($request->has('title')) {
			$res->title = $request->input('title');
		}
		if ($request->has('title1')) {
			$res->title1 = $request->input('title1');
		}
		if ($request->has('title2')) {
			$res->title2 = $request->input('title2');
		}
		if ($request->has('tagline')) {
			$res->tagline = $request->input('tagline');
		}
		if ($request->has('tagline1')) {
			$res->tagline1 = $request->input('tagline1');
		}
		if ($request->has('tagline2')) {
			$res->tagline2 = $request->input('tagline2');
		}
		if ($request->has('tagline3')) {
			$res->tagline3 = $request->input('tagline3');
		}
		if ($request->has('tagline4')) {
			$res->tagline4 = $request->input('tagline4');
		}

		if ($request->has('tagline5')) {
			$res->tagline5 = $request->input('tagline5');
		}

		if ($request->has('tagline6')) {
			$res->tagline6 = $request->input('tagline6');
		}
		if ($request->has('tagline7')) {
			$res->tagline7 = $request->input('tagline7');
		}
		if ($request->has('short_description')) {
			$res->short_description = $request->input('short_description');
		}
		if ($request->has('short_description1')) {
			$res->short_description1 = $request->input('short_description1');
		}
		//return $res->short_description1 = $request->input('short_description1');
		if ($request->has('short_description2')) {
			$res->short_description2 = $request->input('short_description2');
		}
		if ($request->has('short_description3')) {
			$res->short_description3 = $request->input('short_description3');
		}
		if ($request->has('arabic_title')) {
			$res->arabic_title = $request->input('arabic_title');
		}
		if ($request->has('arabic_title1')) {
			$res->arabic_title1 = $request->input('arabic_title1');
		}
		//return $res->arabic_title1 = $request->input('arabic_title1');
		if ($request->has('arabic_title2')) {
			$res->arabic_title2 = $request->input('arabic_title2');
		}
//	dd($request->all());
	if ($request->has('arabic_tagline')) {
		$res->arabic_tagline = $request->input('arabic_tagline');
	}
	if ($request->has('arabic_tagline1')) {
		$res->arabic_tagline1 = $request->input('arabic_tagline1');
	}
	if ($request->has('arabic_tagline2')) {
		$res->arabic_tagline2 = $request->input('arabic_tagline2');
	}

	if ($request->has('arabic_tagline3')) {
		$res->arabic_tagline3 = $request->input('arabic_tagline3');
	}
	if ($request->has('arabic_tagline4')) {
		$res->arabic_tagline4 = $request->input('arabic_tagline4');
	}
	if ($request->has('arabic_tagline5')) {
		$res->arabic_tagline5 = $request->input('arabic_tagline5');
	}
	if ($request->has('arabic_tagline6')) {
		$res->arabic_tagline6 = $request->input('arabic_tagline6');
	}
	if ($request->has('arabic_tagline7')) {
		$res->arabic_tagline7 = $request->input('arabic_tagline7');
	}
	if ($request->has('arabic_short_description')) {
		$res->arabic_short_description = $request->input('arabic_short_description');
	}
	if ($request->has('arabic_short_description1')) {
		$res->arabic_short_description1 = $request->input('arabic_short_description1');
	}
	if ($request->has('arabic_short_description2')) {
		$res->arabic_short_description2 = $request->input('arabic_short_description2');
	}
	if ($request->has('arabic_short_description3')) {
		$res->arabic_short_description3 = $request->input('arabic_short_description3');
	}
	
}


elseif($request->id=='134'){
			
	$res=CMS::find($request->id);
	//return $res;
	// Update the fields for ID 113 or 114
	$image=$request->file('image');
//return $image;
if ($image) {
$name_gen= hexdec(uniqid());
 $image_ext=strtolower($image->getClientOriginalExtension());
 $image_name=$name_gen.'.'.$image_ext;
 $up_location='Backend/images/';
 $last_img=$up_location.$image_name;
 $image->move(public_path($up_location),$image_name);
$res->image = $image_name;
}
$image1=$request->file('image1');
//return $image;
if ($image1) {
$name_gen= hexdec(uniqid());
 $image_ext=strtolower($image1->getClientOriginalExtension());
 $image_name=$name_gen.'.'.$image_ext;
 $up_location='Backend/images/';
 $last_img=$up_location.$image_name;
 $image1->move(public_path($up_location),$image_name);
$res->image1 = $image_name;
}
$image2=$request->file('image2');
//return $image;
if ($image2) {
$name_gen= hexdec(uniqid());
 $image_ext=strtolower($image2->getClientOriginalExtension());
 $image_name=$name_gen.'.'.$image_ext;
 $up_location='Backend/images/';
 $last_img=$up_location.$image_name;
 $image2->move(public_path($up_location),$image_name);
$res->image2 = $image_name;
}

$image3=$request->file('image3');
//return $image;
if ($image3) {
$name_gen= hexdec(uniqid());
 $image_ext=strtolower($image3->getClientOriginalExtension());
 $image_name=$name_gen.'.'.$image_ext;
 $up_location='Backend/images/';
 $last_img=$up_location.$image_name;
 $image3->move(public_path($up_location),$image_name);
$res->image3 = $image_name;
}
	if ($request->has('title')) {
		$res->title = $request->input('title');
	}
	if ($request->has('title1')) {
		$res->title1 = $request->input('title1');
	}
	if ($request->has('title2')) {
		$res->title2 = $request->input('title2');
	}
	if ($request->has('tagline')) {
		$res->tagline = $request->input('tagline');
	}
	if ($request->has('tagline1')) {
		$res->tagline1 = $request->input('tagline1');
	}
	if ($request->has('tagline2')) {
		$res->tagline2 = $request->input('tagline2');
	}
	if ($request->has('tagline3')) {
		$res->tagline3 = $request->input('tagline3');
	}
	if ($request->has('tagline4')) {
		$res->tagline4 = $request->input('tagline4');
	}

	if ($request->has('tagline5')) {
		$res->tagline5 = $request->input('tagline5');
	}

	if ($request->has('tagline6')) {
		$res->tagline6 = $request->input('tagline6');
	}
	if ($request->has('short_description')) {
		$res->short_description = $request->input('short_description');
	}
	if ($request->has('short_description1')) {
		$res->short_description1 = $request->input('short_description1');
	}
	//return $res->short_description1 = $request->input('short_description1');
	if ($request->has('short_description2')) {
		$res->short_description2 = $request->input('short_description2');
	}
	if ($request->has('short_description3')) {
		$res->short_description3 = $request->input('short_description3');
	}
	if ($request->has('arabic_title')) {
		$res->arabic_title = $request->input('arabic_title');
	}
	if ($request->has('arabic_title1')) {
		$res->arabic_title1 = $request->input('arabic_title1');
	}
	//return $res->arabic_title1 = $request->input('arabic_title1');
	if ($request->has('arabic_title2')) {
		$res->arabic_title2 = $request->input('arabic_title2');
	}
//	dd($request->all());
if ($request->has('arabic_tagline')) {
	$res->arabic_tagline = $request->input('arabic_tagline');
}
if ($request->has('arabic_tagline1')) {
	$res->arabic_tagline1 = $request->input('arabic_tagline1');
}
if ($request->has('arabic_tagline2')) {
	$res->arabic_tagline2 = $request->input('arabic_tagline2');
}

if ($request->has('arabic_tagline3')) {
	$res->arabic_tagline3 = $request->input('arabic_tagline3');
}
if ($request->has('arabic_tagline4')) {
	$res->arabic_tagline4 = $request->input('arabic_tagline4');
}
if ($request->has('arabic_tagline5')) {
	$res->arabic_tagline5 = $request->input('arabic_tagline5');
}
if ($request->has('arabic_tagline6')) {
	$res->arabic_tagline6 = $request->input('arabic_tagline6');
}
if ($request->has('arabic_short_description')) {
	$res->arabic_short_description = $request->input('arabic_short_description');
}
if ($request->has('arabic_short_description1')) {
	$res->arabic_short_description1 = $request->input('arabic_short_description1');
}
if ($request->has('arabic_short_description2')) {
	$res->arabic_short_description2 = $request->input('arabic_short_description2');
}
if ($request->has('arabic_short_description3')) {
	$res->arabic_short_description2 = $request->input('arabic_short_description3');
}

}

elseif($request->id=='127'){
			
	$res=CMS::find($request->id);
	$image=$request->file('image');
	//return $image;
if ($image) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	$res->image = $image_name;
	}

	$image1=$request->file('image1');
	//return $image;
if ($image1) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image1->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image1->move(public_path($up_location),$image_name);
	$res->image1 = $image_name;
	}
	// Update the fields for ID 113 or 114
	if ($request->has('title')) {
		$res->title = $request->input('title');
	}
	if ($request->has('title1')) {
		$res->title1 = $request->input('title1');
	}
	if ($request->has('arabic_title')) {
		$res->arabic_title = $request->input('arabic_title');
	}
	
	if ($request->has('tagline2')) {
		$res->tagline2 = $request->input('tagline2');
	}
	if ($request->has('tagline3')) {
		$res->tagline3 = $request->input('tagline3');
	}
	if ($request->has('tagline1')) {
		$res->tagline1 = $request->input('tagline1');
	}
	if ($request->has('arabic_tagline1')) {
		$res->arabic_tagline1 = $request->input('arabic_tagline1');
	}
	if ($request->has('arabic_tagline2')) {
		$res->arabic_tagline2 = $request->input('arabic_tagline2');
	}
	if ($request->has('arabic_tagline3')) {
		$res->arabic_tagline3 = $request->input('arabic_tagline3');
	}
	if ($request->has('short_description')) {
		$res->short_description = $request->input('short_description');
	}
	if ($request->has('short_description1')) {
		$res->short_description1 = $request->input('short_description1');
	}
	if ($request->has('arabic_short_description')) {
		$res->arabic_short_description = $request->input('arabic_short_description');
	}
	if ($request->has('arabic_short_description2')) {
		$res->arabic_short_description2 = $request->input('arabic_short_description2');
	}
	if ($request->has('arabic_tagline3')) {
		$res->arabic_tagline3 = $request->input('arabic_tagline3');
	}
	
	if ($request->has('arabic_name')) {
		$res->arabic_name = $request->input('arabic_name');
	}
}

elseif($request->id=='128'){
			
	$res=CMS::find($request->id);
	$image=$request->file('image');
	//return $image;
if ($image) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	$res->image = $image_name;
	}
	$image1=$request->file('image1');
	//return $image;
if ($image1) {
	$name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image1->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image1->move(public_path($up_location),$image_name);
	$res->image1 = $image_name;
	}
	// Update the fields for ID 113 or 114
	if ($request->has('title')) {
		$res->title = $request->input('title');
	}
	if ($request->has('title1')) {
		$res->title1 = $request->input('title1');
	}
	if ($request->has('arabic_title')) {
		$res->arabic_title = $request->input('arabic_title');
	}
	
	if ($request->has('tagline2')) {
		$res->tagline2 = $request->input('tagline2');
	}
	if ($request->has('tagline3')) {
		$res->tagline3 = $request->input('tagline3');
	}
	if ($request->has('tagline4')) {
		$res->tagline4 = $request->input('tagline4');
	}
	if ($request->has('tagline1')) {
		$res->tagline1 = $request->input('tagline1');
	}
	if ($request->has('arabic_tagline1')) {
		$res->arabic_tagline1 = $request->input('arabic_tagline1');
	}
	if ($request->has('arabic_tagline2')) {
		$res->arabic_tagline2 = $request->input('arabic_tagline2');
	}
	if ($request->has('arabic_tagline4')) {
		$res->arabic_tagline4 = $request->input('arabic_tagline4');
	}
	
	if ($request->has('short_description')) {
		$res->short_description = $request->input('short_description');
	}
	if ($request->has('short_description1')) {
		$res->short_description1 = $request->input('short_description1');
	}
	if ($request->has('arabic_short_description')) {
		$res->arabic_short_description = $request->input('arabic_short_description');
	}
	if ($request->has('arabic_short_description2')) {
		$res->arabic_short_description2 = $request->input('arabic_short_description2');
	}
	if ($request->has('arabic_tagline3')) {
		$res->arabic_tagline3 = $request->input('arabic_tagline3');
	}
	
	if ($request->has('arabic_name')) {
		$res->arabic_name = $request->input('arabic_name');
	}
}


elseif($request->id=='129'){
			
	$res=CMS::find($request->id);
	$image=$request->file('image');
	// Update the fields for ID 113 or 114
	if ($image) {
		$name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res->image = $image_name;
		}
	if ($request->has('title')) {
		$res->title = $request->input('title');
	}

	if ($request->has('tagline')) {
		$res->tagline = $request->input('tagline');
	}
	if ($request->has('arabic_title')) {
		$res->arabic_title = $request->input('arabic_title');
	}
	if ($request->has('arabic_tagline')) {
		$res->arabic_tagline = $request->input('arabic_tagline');
	}
	if ($request->has('short_description')) {
		$res->short_description = $request->input('short_description');
	}
	if ($request->has('short_description1')) {
		$res->short_description1 = $request->input('short_description1');
	}
	if ($request->has('arabic_short_description')) {
		$res->arabic_short_description = $request->input('arabic_short_description');
	}
	if ($request->has('arabic_short_description1')) {
		$res->arabic_short_description1 = $request->input('arabic_short_description1');
	}
	
}

elseif($request->id=='131'){
			
	$res=CMS::find($request->id);
	$image=$request->file('image');
	// Update the fields for ID 113 or 114
	if ($image) {
		$name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res->image = $image_name;
		}
	if ($request->has('title')) {
		$res->title = $request->input('title');
	}

	if ($request->has('tagline')) {
		$res->tagline = $request->input('tagline');
	}
	if ($request->has('arabic_title')) {
		$res->arabic_title = $request->input('arabic_title');
	}
	if ($request->has('arabic_tagline')) {
		$res->arabic_tagline = $request->input('arabic_tagline');
	}
	
	
}
		elseif($request->id=='116'){
			$image=$request->file('image');
			$image1=$request->file('image1');
			$res=CMS::find($request->id);
			// Update the fields for ID 113 or 114
			if ($request->has('title')) {
				$res->title = $request->input('title');
			}
			if ($request->has('arabic_title')) {
				$res->arabic_title = $request->input('arabic_title');
			}
			if ($request->has('tagline')) {
				$res->tagline = $request->input('tagline');
			}
			if ($request->has('arabic_tagline')) {
				$res->arabic_tagline = $request->input('arabic_tagline');
			}
			// $res->description = $request->input('description');
			
			if ($image) {
				$name_gen= hexdec(uniqid());
				 $image_ext=strtolower($image->getClientOriginalExtension());
				 $image_name=$name_gen.'.'.$image_ext;
				 $up_location='Backend/images/';
				 $last_img=$up_location.$image_name;
				 $image->move(public_path($up_location),$image_name);
				$res->image = $image_name;
				}

				if ($image1) {
					$name_gen= hexdec(uniqid());
					 $image_ext=strtolower($image1->getClientOriginalExtension());
					 $image_name=$name_gen.'.'.$image_ext;
					 $up_location='Backend/images/';
					 $last_img=$up_location.$image_name;
					 $image1->move(public_path($up_location),$image_name);
					$res->image1 = $image_name;
					}
				
				
				
				
				
		}

		$res->save();	
		return redirect('admin/cms');
		}
		
		
    public function delete($id)
	{
		
		CMS::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
