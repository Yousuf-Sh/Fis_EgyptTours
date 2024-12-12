<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    public function send(Request $request)
    {
        // dd($request);
        // Validate the incoming form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'nullable|string',
            'user_message' => 'required|string', // Renamed to avoid conflict with $message
        ]);
        
        // Get the validated data
        $data = $request->only('first_name', 'last_name', 'email', 'phone_number', 'user_message');
   
        DB::table('contactus')->insert($data);
        // dd($data);
        // Send the email with the validated data
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to(env('MAIL_FROM_ADDRESS')) // Replace with the recipient's email
                    ->subject('[HashTag EgyptTours] Contact Form Submission');
        });

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        // dd("fhhij");
        $contactus = DB::table('contactus')->get();
        return view('Admin.contactus.index', compact('contactus'));
    }

    public function show($id){
        $contactus = DB::table('contactus')->where('id', $id)->first();
        if ($contactus) {
            // Update the status to 'read'
            DB::table('contactus')->where('id', $id)->update(['status' => 'read']);
        }
        return view('Admin.contactus.show', compact('contactus'));
    }
}
