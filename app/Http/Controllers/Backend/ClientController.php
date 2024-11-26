<?php

namespace App\Http\Controllers\Backend;
use App\Models\Services;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    public function index(){
       // return 'xfv';
		$Client=Client::all();
		return view('Admin.Client.index',compact('Client'));
	
}
public function create(){
	
	
	return view('Admin.Client.add');
  
	
}

public function store(Request $request){
	$image=$request->file('image1');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$image->move(public_path($up_location),$image_name);
	$cmsID=client::insert([
	'title'=>$request->title,
	// 'tagline'=>$request->tagline,
	// 'short_description'=>$request->short_description,
	// 'description'=>$request->description,
	// 'button'=>$request->button,
	'image'=>$image_name,
	]);
	 
//return $cmsID;
	// clients::insert([
	
	// 'service_icon'=>$request->service_icon,
	// 'title'=>$request->title,
	// ]);
	return redirect('/admin/clients');
	}
	public function edit($id)
	{
		
		$clients=Client::findOrFail($id);
	///	return $clients;
		return view('Admin.Client.edit',compact('clients'));
		
		
	}
	public function update(Request $request){
		//return 'fd';
		$image=$request->file('image');
		
		$res=Client::find($request->id);
		$res->title=$request->input('title');
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			//return $res;
        $res->save();
		return redirect('/admin/clients');
		}

public function delete($id)
	{
		//return $id;
		Client::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
