<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyEmail;
class newsletterController extends Controller
{
    //
    public function index(){
	//	return 'df';
		$Newsletter=Newsletter::all();
		//return $Newsletter;
		return view('Admin.Newsletter.index',compact('Newsletter'));
	
}
public function create(){
	$Newsletter=Newsletter::all();
		
	return view('Admin.Newsletter.add',compact('Newsletter'));
  
	
}
public function store(Request $request){
	//return 'imran kahn';
	//return $request->name;
	$data=array([
	// 	'name'=>$request->name,
	// 	'address'=>$request->address,
	// 	'services'=>$request->services,
	// 'phone'=>$request->phone,
    'email'=>$request->email
	// 'message'=>$request->message,
 ///  'location'=>$request->location,
	]);
//return $data;
	$result=DB::table('Newsletters')->insert($data);
	//return $result;
	// if ($result) {
    //     return response()->json(['success' =>'Congratulations! Message Send Successfully']);
    // } else {
    //     return response()->json(['success' => false, 'message' => 'Failed to send message']);
    // }
	return redirect()->back()->with('success','Congratulations! Email Send Successfully');
	}
     public function edit($id)
	{
		//return $id;
		//$cms=CMS::findOrFail($id);
		$Newsletter=Newsletter::findOrFail($id);

	//	return $Newsletter;
	//	$Newsletter=Newsletter::all();
		//dd($Newsletter);
		return view('Admin.Newsletter.edit',compact('Newsletter'));
	}
    public function update(Request $request){
		// dd($request->id);
	
		$res = Newsletter::find($request->id);

// Update the reply for the specific newsletter
Newsletter::where('id', $request->id)->update([
    'reply' => $request->reply,
]);

// Save the changes
$res->save();

// Get the reply message from the request
$replyMessage = $request->reply;

// Retrieve all email addresses from the Newsletter model
$emails = Newsletter::pluck('email')->toArray();

// Send the reply email to all email addresses
foreach ($emails as $email) {
    Mail::to($email)->send(new ReplyEmail($replyMessage));
}

		
		return redirect('admin/Newsletter');
		}
		
    public function delete($id)
	{
		
       Newsletter::findOrFail($id)->delete();
	   return redirect()->back();

	}
    public function view($id)
	{
		$Newsletter=Newsletter::findOrFail($id);
		return view('Admin.Newsletter.details',compact('Newsletter'));
	}
}

