<?php


namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;

use App\Models\LiveProduct;
use App\Http\Controllers\Controller;

use Illuminate\Support\Carbon;
use App\Models\Streaming;
class AboutController extends Controller
{
    public function index(){
		$slider=Streaming::all();
		return view('Admin.streaming.index',compact('slider'));
	
}

public function create(){
		
	return view('Admin.streaming.add');
	
}
public function store(Request $request){
	$request->validate([
		'images' => 'required',
		
	  ]);
	$data= new Streaming();

         $images=$request->file('images');
         $name_gen= hexdec(uniqid());
         $image_ext=strtolower($images->getClientOriginalExtension());
         $image_name=$name_gen.'.'.$image_ext;
         $up_location='Backend/images/';
         $last_img=$up_location.$image_name;
         $images->move(public_path($up_location),$image_name);
		 $data->images =$image_name;
		 $data->title=$request->title;
		 $data->label=$request->label;
		 $data->button=$request->button;
		 $data->short_description=$request->short_description;
		 $data->save();
	return redirect('admin/streaming');
	}

	public function edit()
	{
		$slider=Streaming::first();
		
		return view('Admin.streaming.edit',compact('slider'));
	}

	public function update(Request $request){
		$res=Streaming::find($request->id);
		$image=$request->file('images');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->images = $image_name;
        }
		$res->title=$request->input('title');
		$res->label=$request->input('label');
		$res->button=$request->input('button');
		$res->short_description=$request->input('short_description');
        $res->save();
		return redirect()->back()->with('Success','Updated Successfully');
		}
	public function delete($id)
	{
        Streaming::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
