<?php

namespace App\Http\Controllers\Backend;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    //
    public function index(){
	//	return 'df';
		$contact=Contact::all();
		//return $contact;
		return view('Admin.contactUs.index',compact('contact'));
	
}
public function create(){
	$contact=Contact::all();
		
	return view('Admin.contactUs.add',compact('contact'));
  
	
}
public function store(Request $request){
	//return 'imran kahn';
	//return $request->name;
	$data=array([
		'name'=>$request->name,
		'address'=>$request->address,
		'services'=>$request->services,
	'phone'=>$request->phone,
    'email'=>$request->email,
	'message'=>$request->message,
 ///  'location'=>$request->location,
	]);
//return $data;
	$result=DB::table('contacts')->insert($data);
	//return $result;
	if ($result) {
        return response()->json(['success' =>'Congratulations! Message Send Successfully']);
    } else {
        return response()->json(['success' => false, 'message' => 'Failed to send message']);
    }
	return view('front.include.contact');
	}
     public function edit($id)
	{
		//return $id;
		//$cms=CMS::findOrFail($id);
		$contact=Contact::findOrFail($id);

	//	return $contact;
	//	$contact=Contact::all();
		//dd($contact);
		return view('Admin.contactUs.edit',compact('contact'));
	}
    public function update(Request $request){
		// dd($request->id);
	
		$res=Contact::find($request->id);
		//dd($res);
		Contact::where('id',$request->id)->update([
			'name'=>$request->name,
			'address'=>$request->address,
			'services'=>$request->services,
		'phone'=>$request->phone,
		'email'=>$request->email,
		'message'=>$request->message,

		]);
     
		return redirect('admin/contact');
		}
		
    public function delete($id)
	{
		
       Contact::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
