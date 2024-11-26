<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iot;
class IotController extends Controller
{
    public function index(){
		//return 'df';
	//	return 'dfd';
		$Iot=Iot::all();
//return $Iot;
		return view('Admin.Iot.index',compact('Iot'));
	
}

public function create(){
		
	return view('Admin.Iot.add');
	
}
public function store(Request $request){
	//return 'dgfdg';
	// $request->validate([
	// 	'images' => 'required',
		
	//   ]);
	$data= new Iot();
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
		 $data->images =$image_name;
	}
}
		 $data->title=$request->title;
		 $data->description=$request->short_description;
		 $data->logo=$request->logo;
		//return  $data;
	///	 $data->save();

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
		
		$data->arabic_title = $request->arabic_title;
		
		$data->arabic_short_description = $request->arabic_short_description;
		$data->arabic_image = $arabic_image_name ?? null;
		$data->arabic_logo =  $request->arabic_logo;
		$data->save();
		
	return redirect('admin.Iot');
	}

	public function edit($id)
	{
		$Iot=Iot::findOrFail($id);
		
		return view('Admin.Iot.edit',compact('Iot'));
	}

	public function update(Request $request){
		$res=Iot::find($request->id);

		if ($request->has('title')) {
			$res->title = $request->input('title');
		}
		
		if ($request->has('short_descriptionn')) {
			$res->short_description = $request->input('short_description');
		}
		
		if ($request->has('logo')) {
			$res->logo = $request->input('logo');
		}
		$image1 = $request->file('images');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->images = $image_name1;
		}
		
		if ($request->has('arabic_title')) {
			$res->arabic_title = $request->input('arabic_title');
		}
		
		if ($request->has('arabic_short_description')) {
			$res->arabic_short_description = $request->input('arabic_short_description');
		}
		if ($request->has('arabic_logo')) {
			$res->arabic_logo = $request->input('arabic_logo');
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
		return redirect('admin/Iot');
		}
	public function delete($id)
	{
		Iot::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
