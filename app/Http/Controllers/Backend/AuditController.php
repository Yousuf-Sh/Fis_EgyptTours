<?php

namespace App\Http\Controllers\Backend;
use App\Models\Audit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AuditController extends Controller
{
    //
    public function index(){
		//return 'dfd';
		$audit=Audit::all();

		return view('Admin.audit.index',compact('audit'));
	
}

public function create(){
		
	return view('Admin.audit.add');
	
}
public function store(Request $request){
//	return 'zf';
	$request->validate([
		'images' => 'required'
		
	  ]);
	$data= new Audit();

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
		 $data->description=$request->description;
		 //return $data;
		 $data->save();
	return redirect('/admin/audit');
	}

	public function edit()
	{
		//return $id;
		$audit=Audit::first();
		//return $audit;
		return view('Admin.audit.edit',compact('audit'));
	}

	public function update(Request $request){
		
		$res=Audit::find($request->id);
		
		$image=$request->file('image');
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
		$res->description=$request->input('description');
		//return $res;
        $res->save();
		return redirect()->back()->with('success','Update Successfully');

	

		}
	public function delete($id)
	{
		Audit::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
