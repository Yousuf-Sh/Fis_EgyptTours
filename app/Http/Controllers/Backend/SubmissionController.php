<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Submitted;
class SubmissionController extends Controller
{
    public function index(){
		$contact=Submitted::all();
		return view('Admin.GeneralSettingnew.index',compact('contact'));
	
}
public function create(){
	$contact=Submitted::all();
		
	return view('Admin.GeneralSettingnew.add',compact('contact'));
  
	
}
public function store(Request $request){
	// $request->validate([

	// 	'logo' => 'required',
		
	//   ]);
	///return $request->all();
	$images=$request->file('logo');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($images->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$images->move(public_path($up_location),$image_name);

	$images=$request->file('arlogo');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($images->getClientOriginalExtension());
	$image_name1=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name1;
	$images->move(public_path($up_location),$image_name1);

	$images=$request->file('enlogo');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($images->getClientOriginalExtension());
	$image_name2=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name2;
	$images->move(public_path($up_location),$image_name2);

	// $images=$request->file('instagramicon');
	// $name_gen= hexdec(uniqid());
	// $image_ext=strtolower($images->getClientOriginalExtension());
	// $image_name3=$name_gen.'.'.$image_ext;
	// $up_location='Backend/images/';
	// $last_img=$up_location.$image_name3;
	// $images->move(public_path($up_location),$image_name3);

	// $images=$request->file('telephoneicon');
	// $name_gen= hexdec(uniqid());
	// $image_ext=strtolower($images->getClientOriginalExtension());
	// $image_name4=$name_gen.'.'.$image_ext;
	// $up_location='Backend/images/';
	// $last_img=$up_location.$image_name4;
	// $images->move(public_path($up_location),$image_name4);

	// $images=$request->file('emailicon');
	// $name_gen= hexdec(uniqid());
	// $image_ext=strtolower($images->getClientOriginalExtension());
	// $image_name5=$name_gen.'.'.$image_ext;
	// $up_location='Backend/images/';
	// $last_img=$up_location.$image_name5;
	// $images->move(public_path($up_location),$image_name5);


	Submitted::insert([
	'logo'=>$image_name,
	'phone1'=>$request->phone1,
	'button'=>$request->button,
    'email'=>$request->email,
	'arlogo'=>$image_name1,
	'enlogo'=>$image_name2,
	'facebooklink'=>$request->facebooklink,
	'twitterlink'=>$request->twitterlink,
	'instagramlink'=>$request->instagramlink,
	
	]);
//	$result=DB::table('submitteds')->insert($data);
	return redirect('admin/submitted');
	}
     public function edit()
	{
		
		$contact=Submitted::first();
       // return $contact;
		//dd($contact);
		return view('Admin.GeneralSettingnew.edit',compact('contact'));
	}
    public function update(Request $request){
		$res = Submitted::find($request->id);
//return $res;
//dd($res);
		$images = $request->file('logo');
		$image_name = null;
		if ($images) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($images->getClientOriginalExtension());
			$image_name = $name_gen.'.'.$image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location.$image_name;
			$images->move(public_path($up_location), $image_name);
			$res->logo = $image_name;
		}
		
		// $images_arabic1 = $request->file('arabic_logo');
		// $images_arabic_name = null;
		// if ($images_arabic1) {
		// 	$name_gen = hexdec(uniqid());
		// 	$image_ext = strtolower($images_arabic1->getClientOriginalExtension());
		// 	$images_arabic_name  = $name_gen.'.'.$image_ext;
		// 	$up_location = 'Backend/images/';
		// 	$last_img = $up_location.$images_arabic_name;
		// 	$images_arabic1->move(public_path($up_location), $images_arabic_name);
		// 	$res->arabic_logo =$images_arabic_name;
		// }

		$images1 = $request->file('arlogo');
		
		$image_name1 = null;
		if ($images1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($images1->getClientOriginalExtension());
			$image_name1 = $name_gen.'.'.$image_ext;
			$up_location1 = 'Backend/images/';
			$last_img1 = $up_location1 . $image_name1;
			$images1->move(public_path($up_location1), $image_name1);
			$res->arlogo = $image_name1;
			
		}
		// $images_arabic2 = $request->file('arabic_enlogo');
		
		// $images_arabic_name1 = null;
		// if ($images_arabic2) {
		// 	$name_gen = hexdec(uniqid());
		// 	$image_ext = strtolower($images_arabic2->getClientOriginalExtension());
		// 	$images_arabic_name1 = $name_gen.'.'.$image_ext;
		// 	$up_location1 = 'Backend/images/';
		// 	$last_img1 = $up_location1 . $images_arabic_name1;
		// 	$images_arabic2->move(public_path($up_location1), $images_arabic_name1);
		// 	$res->arabic_enlogo =$images_arabic_name1;
			
		// }
		


		//dd($res);
		$images2 = $request->file('enlogo');
		$image_name2 = null;
		if ($images2) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($images2->getClientOriginalExtension());
			$image_name2 = $name_gen.'.'.$image_ext;
			$up_location2 = 'Backend/images/';
			$last_img2 = $up_location2 . $image_name2;
			$images2->move(public_path($up_location2), $image_name2);
			$res->enlogo = $image_name2;
		}

		// $images_arabic3 = $request->file('arabic_arlogo');
		// $images_arabic_name3 = null;
		// if ($images_arabic2) {
		// 	$name_gen = hexdec(uniqid());
		// 	$image_ext = strtolower($images_arabic2->getClientOriginalExtension());
		// 	$images_arabic_name3 = $name_gen.'.'.$image_ext;
		// 	$up_location2 = 'Backend/images/';
		// 	$last_img2 = $up_location2 . $images_arabic_name3;
		// 	$images_arabic2->move(public_path($up_location2), $images_arabic_name3);
		// 	$res->arabic_arlogo = $images_arabic_name3;
		// }

		// Process Arabic logo image
$arabicLogo = $request->file('arabic_logo');
if ($arabicLogo) {
    $arabicLogoName = hexdec(uniqid()) . '.' . $arabicLogo->getClientOriginalExtension();
    $arabicLogo->move(public_path('Backend/images/'), $arabicLogoName);
    $res->arabic_logo = $arabicLogoName;
}
else {
    $arabicLogoName = null;
}
// Process Arabic enlogo image
$arabicEnLogo = $request->file('arabic_enlogo');
if ($arabicEnLogo) {
    $arabicEnLogoName = hexdec(uniqid()) . '.' . $arabicEnLogo->getClientOriginalExtension();
    $arabicEnLogo->move(public_path('Backend/images/'), $arabicEnLogoName);
    $res->arabic_enlogo = $arabicEnLogoName;
}
else {
    $arabicEnLogoName = null;
}
// Process Arabic arlogo image
$arabicArLogo = $request->file('arabic_arlogo');
if ($arabicArLogo) {
    $arabicArLogoName = hexdec(uniqid()) . '.' . $arabicArLogo->getClientOriginalExtension();
    $arabicArLogo->move(public_path('Backend/images/'), $arabicArLogoName);
    $res->arabic_arlogo = $arabicArLogoName;
}
else {
    $arabicArLogoName = null;
}
		if ($request->has('phone1')) {
			$res->phone1 = $request->input('phone1');
		}

		if ($request->has('arabic_phone1')) {
			$res->arabic_phone1 = $request->input('arabic_phone1');
		}
		if ($request->has('button')) {
			$res->button = $request->input('button');
		}
		if ($request->has('arabic_email')) {
			$res->arabic_email = $request->input('arabic_email');
		}
		if ($request->has('email')) {
			$res->email = $request->input('email');
		}
		if ($request->has('arabic_button')) {
			$res->arabic_button = $request->input('arabic_button');
		}
		if ($request->has('facebooklink')) {
			$res->facebooklink = $request->input('facebooklink');
		}
		if ($request->has('arabic_facebooklink')) {
			$res->arabic_facebooklink = $request->input('arabic_facebooklink');
		}
		if ($request->has('twitterlink')) {
			$res->twitterlink = $request->input('twitterlink');
		}
		if ($request->has('skype')) {
			$res->skype = $request->input('skype');
		}

	
		if ($request->has('linkdelin')) {
			$res->linkdelin = $request->input('linkdelin');
		}
		//return $res->linkdelin = $request->input('linkdelin');
	
		if ($request->has('skype1')) {
			$res->skype1 = $request->input('skype1');
		}
		if ($request->has('linkdelin1')) {
			$res->linkdelin1 = $request->input('linkdelin1');
		}
		if ($request->has('arabic_twitterlink')) {
			$res->arabic_twitterlink = $request->input('arabic_twitterlink');
		}
		if ($request->has('instagramlink')) {
			$res->instagramlink = $request->input('instagramlink');
		}
		if ($request->has('arabic_instagramlink')) {
			$res->arabic_instagramlink = $request->input('arabic_instagramlink');
		}
		if ($request->has('footer_description')) {
			$res->footer_description= $request->input('footer_description');
		}
		if ($request->has('footer_label_description')) {
			$res->footer_label_description= $request->input('footer_label_description');
		}
		if ($request->has('footer_label')) {
			$res->footer_label= $request->input('footer_label');
		}


		if ($request->has('footer_description_ar')) {
			$res->footer_description_ar= $request->input('footer_description_ar');
		}
		if ($request->has('footer_label_description_ar')) {
			$res->footer_label_description_ar= $request->input('footer_label_description_ar');
		}
		if ($request->has('footer_label_ar')) {
			$res->footer_label_ar= $request->input('footer_label_ar');
		}
		// Submitted::where('id',$request->id)->update([
		// 	//	'logo'=>$image_name,
		// 		'phone1'=>$request->phone1,
		// 		'button'=>$request->button,
		// 		'email'=>$request->email,
				
		// 		'facebooklink'=>$request->facebooklink,
		// 		'twitterlink'=>$request->twitterlink,
		// 		'instagramlink'=>$request->instagramlink,
	
		// 	]);
	//	$$updateData->save();
		// Only update fields if new values are provided
		if ($image_name !== null) {
			$updateData['logo'] = $image_name;
		}
		
		if ($image_name1 !== null) {
			$updateData['arlog'] = $image_name1;
		}
		
		if ($image_name2 !== null) {
			$updateData['enlogo'] = $image_name2;
		}
		if ($arabicLogoName !== null) {
			$updateData['arabic_logo'] = $arabicLogoName;
		}
		
		if ($arabicEnLogoName  !== null) {
			$updateData['arabic_enlogo'] = $arabicEnLogoName ;
		}
		
		if ($arabicArLogoName !== null) {
			$updateData['arabic_arlogo'] =$arabicArLogoName;
		}
     $res->save();
		return redirect()->back()->with('success','updated successfully');
		}
		
    public function delete($id)
	{
		
        Submitted::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
