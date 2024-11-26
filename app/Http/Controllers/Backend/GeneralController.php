<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use Illuminate\Support\Str;
class GeneralController extends Controller
{
    //
    public function index(){
	//	return 'df';
		$general=General::all();
		//return $contact;
		return view('Admin.generalsetting.index',compact('general'));
	
}
public function create(){
	$general=General::all();
		//return 'dfd';
	return view('Admin.generalsetting.add',compact('general'));
  
	
}
public function store(Request $request){
	//return 'imran kahn';
	//return $request->name;
    // $image=$request->file('image');
	// $name_gen= hexdec(uniqid());
	// $image_ext=strtolower($image->getClientOriginalExtension());
	// $image_name=$name_gen.'.'.$image_ext;
	// $up_location='Backend/images/';
	// $last_img=$up_location.$image_name;
	// $image->move(public_path($up_location),$image_name);
       //$images[];
    // if ($request->hasFile('image')) {
    //     foreach ($request->file('image') as $image) {
    //         $imageName = time() . '_' . $image->getClientOriginalName();
    //         $image->move(public_path('uploads'), $imageName);
    //         $images[] = 'Backend/images/' . $imageName;
    //     }
    // }
  //  $post->slug = Str::slug($post->title);
	$general=General::insert([
	
       
	'description'=>$request->description,
	
	'image'=>$imageName,
	]);
	
	return redirect('admin/setting');
	}
     public function edit()
	{
		//return 'lkl';
		//$cms=CMS::findOrFail($id);
		$general=General::first();
	//	return $contact;
	//	$contact=Contact::all();
		//dd($contact);
		return view('Admin.generalsetting.edit',compact('general'));
	}
    public function update(Request $request){
		// dd($request->id);
	
	 
            $image=$request->file('image');
            $res=General::find($request->id);
            
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
     
		return redirect()->back()->with('success','Update Successfully');
		}
		
        public function delete($id){
		
        General::findOrFail($id)->delete();
	   return redirect()->back();

	}

}
