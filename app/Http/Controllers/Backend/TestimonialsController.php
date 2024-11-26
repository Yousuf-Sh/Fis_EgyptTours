<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    //
    public function index(){
		$testimonials=Testimonials::all();
		return view('Admin.testimonials.index',compact('testimonials'));
	
}
public function create(){
	$testimonials=Testimonials::all();
	return view('Admin.testimonials.add',compact('testimonials'));
  
	
}
public function store(Request $request){
	$data= new Testimonials();
	if ($request->hasFile('image')) {
		$image1 = $request->file('image');
		if ($image1->isValid()) {
			 $images=$request->file('image');
			 $name_gen= hexdec(uniqid());
			 $image_ext=strtolower($images->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $images->move(public_path($up_location),$image_name);
			 $data->image =$image_name;
		}
	}

			 $data->Customer=$request->Customer;
			 $data->description=$request->description;
			 $data->name=$request->name;
			
			 $data->save();

			 if ($request->hasFile('arabic_image')) {
				$arabic_image = $request->file('arabic_image');
				if ($arabic_image->isValid()) {
					$name_gen = hexdec(uniqid());
					$image_ext = strtolower($arabic_image->getClientOriginalExtension());
					$arabic_image_name = $name_gen . '.' . $image_ext;
					$up_location = 'Backend/images/';
					$arabic_image->move(public_path($up_location), $arabic_image_name);
				}
			}
			
			// Update the record with Arabic fields
			
			$data->arabic_Customer = $request->arabic_Customer;
			$data->arabic_name = $request->arabic_name;
			$data->arabic_description = $request->arabic_description;
			$data->arabic_image = $arabic_image_name ?? null;
			$data->save();

	//return $test;
	return redirect('admin/testimonials');
	}
    public function edit($id)
	{
		$testimonials=Testimonials::findOrFail($id);
		return view('Admin.testimonials.edit',compact('testimonials'));
	}
    public function update(Request $request){
		$res=Testimonials::find($request->id);
		
		if ($request->has('Customer')) {
			$res->Customer = $request->input('Customer');
		}
		if ($request->has('name')) {
			$res->name = $request->input('name');
		}
		if ($request->has('description')) {
			$res->description = $request->input('description');
		}

		$image1 = $request->file('image');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->image = $image_name1;
		}
		
		if ($request->has('arabic_Customer')) {
			$res->arabic_Customer = $request->input('arabic_Customer');
		}
		if ($request->has('arabic_name')) {
			$res->arabic_name = $request->input('arabic_name');
		}
		if ($request->has('arabic_description')) {
			$res->arabic_description = $request->input('arabic_description');
		}
	
		$image1 = $request->file('arabic_image');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->arabic_image= $image_name1;
		}
		

		
        $res->save();
		return redirect('admin/testimonials');
		}
    public function delete($id)
	{
		
		Testimonials::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
