<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
class FooterController extends Controller
{

      //
      public function index(){
		$footer=Footer::all();
		return view('Admin.footer.index',compact('footer'));
	
}

public function create(){
		
	return view('Admin.footer.add');
	
}
public function store(Request $request){
	// $request->validate([
	// 	'images' => 'required',
		
	//   ]);

	$data= new  Footer();

         $images=$request->file('image');
         $name_gen= hexdec(uniqid());
         $image_ext=strtolower($images->getClientOriginalExtension());
         $image_name=$name_gen.'.'.$image_ext;
         $up_location='Backend/images/';
         $last_img=$up_location.$image_name;
         $images->move(public_path($up_location),$image_name);
		 $data->image =$image_name;
         
         $data->services=$request->services;
		 $data->testinomial=$request->testinomail;
		 $data->partenrs=$request->patner;
		 $data->quicklinks=$request->quicklinks;
         $data->contact=$request->contact;
         $data->faq=$request->faq;
         $data->reachus=$request->reachus;
         $data->address=$request->address;
         $data->description=$request->description;
         $data->home=$request->home;
         $data->aboutus=$request->aboutus;
         $data->links=$request->links;
         
      //return $data;
		
		 $data->save();
	return redirect('admin/footer');
	}

	public function edit($id)
	{
		$footer=Footer::findOrFail($id);
		
		return view('Admin.footer.edit',compact('footer'));
	}

	public function update(Request $request){
		$data=Footer::find($request->id);
		$image=$request->file('image');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $data->image = $image_name;
        }
       
        $data->services=$request->input('services');
        //return  $data;
        $data->testinomial=$request->input('testinomail');
        $data->partenrs=$request->input('patner');
        $data->quicklinks=$request->input('quicklinks');
        $data->contact=$request->input('contact');
        $data->faq=$request->input('faq');
        $data->reachus=$request->input('reachus');
        $data->address=$request->input('address');
        $data->description=$request->input('description');
        $data->home=$request->input('home');
        $data->aboutus=$request->input('aboutus');
        $data->links=$request->input('links');
        $data->save();
		return redirect('admin/footer');
		}
	public function delete($id)
	{
       Footer::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
