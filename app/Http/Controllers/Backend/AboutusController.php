<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;
use App\Models\AboutUsService;
use DB;
class AboutusController extends Controller
{
    //
    public function index(){
		//return 'fd';
		$aboutus=About_us::all();
		return view('Admin.AboutUs.index',compact('aboutus'));
	
}
public function create(){
	$aboutus=About_us::all();
		
	return view('Admin.AboutUs.add',compact('aboutus'));
  
	
}
public function store(Request $request){
	
	$image=$request->file('images1');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$image->move(public_path($up_location),$image_name);

	$image2=$request->file('images2');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image2->getClientOriginalExtension());
	$image_name1=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name1;
	$image2->move(public_path($up_location),$image_name1);
	//dd($image_name1);
	$cmsID=About_us::insert([
	'title'=>$request->title,
	'arabic_title'=>$request->arabic_title,
	'date'=>$request->date,
	'link'=>$request->link,
	'arabic_date'=>$request->arabic_date,
	'arabic_pagelink'=>$request->arabic_pagelink,
	'images1'=>$image_name,
	'images2'=>$image_name1,
	]);

	return redirect('admin/about_us');
	}
    public function edit($id)
	{
		$aboutus=About_us::findOrFail($id);
		
		return view('Admin.aboutUs.edit',compact('aboutus'));
	}
    public function update(Request $request){
		
		$image=$request->file('images1');
		
		$res=About_us::find($request->id);
		$res->title=$request->input('title');
        $res->arabic_title=$request->input('arabic_title');
		$res->date=$request->input('date');
        $res->link=$request->input('link');
		$res->arabic_date=$request->input('arabic_date');
        $res->arabic_pagelink=$request->input('arabic_pagelink');
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->images1 = $image_name;
			}
			$image2=$request->file('images2');
			if ($image2) {
				$name_gen= hexdec(uniqid());
				 $image_ext=strtolower($image2->getClientOriginalExtension());
				 $image_name1=$name_gen.'.'.$image_ext;
				 $up_location='Backend/images/';
				 $last_img=$up_location.$image_name;
				 $image->move(public_path($up_location),$image_name1);
				$res->images2 = $image_name1;
				}
        $res->save();

	
		


		return redirect('admin/about_us');
		}
    public function delete($id)
	{
		
		About_us::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
