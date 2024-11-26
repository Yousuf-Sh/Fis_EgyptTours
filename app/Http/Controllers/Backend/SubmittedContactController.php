<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubmittedContact;
use DB;
class SubmittedContactController extends Controller
{
    //
    public function index(){
		$contact=SubmittedContact::all();
		return view('Admin.submitted-contact.index',compact('contact'));
	
}
public function store(Request $request){
	//	return 'imran kahn';
//	return [$request->name];
	$data=array([
		'name'=>$request->name,
		'address'=>$request->address,
		'services'=>$request->services,
	'phone'=>$request->phone,
    'email'=>$request->email,
	'message'=>$request->message,
	'subject'=>$request->subject
	
 ///  'location'=>$request->location,
	]);
	//return $data;
	
	$result=DB::table('submitted_contact')->insert($data);
	//return $result;
	if ($result) {
        return response()->json(['success' =>'Congratulations! Message Send Successfully']);
    } else {
        return response()->json(['success' => false, 'message' => 'Failed to send message']);
    }
	// return redirect()->back()-;
	}

    public function view($id)
	{
		$contact=SubmittedContact::findOrFail($id);
		return view('Admin.submitted-contact.details',compact('contact'));
	}

	public function update(Request $request){
		$res = SubmittedContact::find($request->id);

    $replied = "Replied";
    SubmittedContact::where('id', $request->id)->update([
        'status' => $replied,
        'reply' => $request->reply,
    ]);

    $res->save();

    // Send the email
    $userEmail = $res->email;
   // $replyMessage = $request->message;
	$replyMessage = $request->reply;
    Mail::to($userEmail)->send(new ReplyEmail($replyMessage));

		return redirect('/admin/submitted-contact');
		}
    public function delete($id)
	{
		//return 'hjh';
		
		SubmittedContact::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
