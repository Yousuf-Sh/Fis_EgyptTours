<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
//use App\Models\Verification;
use App\Models\User;
use App\Models\Auctionreport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;
use Carbon\Carbon;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('Admin.pages-login');
    }
    public function SingIn(Request $request)
    {
  
        $email = $request->email;
        $password = $request->password;
        if (auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])) {

            $user = auth()->guard('admin')->user();
            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
       
        }
        return back()->with('error', 'Invaild Email Or Password');

    }
    public function index(Request $request)
    {

        return view('Admin.index');


    }

    public function admin_usersprofile()
    {
        $record = auth()->guard('admin')->user();
        return view('Admin.users-profile', compact('record'));
    }
    public function profile_update(Request $request)
    {
        $data = new Admin();
        $data = Admin::findOrFail($request->id)->first();
        $data->name = $request->input('name');
        $data->company = $request->input('company');
        $data->job = $request->input('job');
        $data->country = $request->input('country');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $image = $request->file('image');
        if ($image) {
            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($image->getClientOriginalExtension());
            $image_name = $name_gen . '.' . $image_ext;
            $up_location = 'Backend/images/';
            $last_image = $up_location . $image_name;
            $image->move(public_path($up_location), $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect('/admin/users-profile');
    }
    public function password_update(Request $request)
    {
        $data = new Admin();
        $data = Admin::findOrFail($request->id);
        $data->password = Hash::make($request->input('password'));
       // return  $data;
        $data->save();
       // return redirect('/admin/users-profile');
        return redirect('/admin/users-profile');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
     
        Auth::guard('admin')->logout(); 
        session()->forget('ADMIN_LOGIN');
		session()->forget('ADMIN_ID');
		session()->flash('Error', 'Logout Successfully');
		return redirect('admin/login');
      
    }

 
    public function delete_admin_img($id)
    {
        $res = Admin::find($id);
        $res->image = null;
        $res->save();
        return redirect('admin/users-profile');
    }
    // public function adminregistered()
    // {
    //     return view('backend.Adminregister.add');
    // }
    // public function registeredadmin(Request $request)
    // {
    //     $image=$request->file('image');
	//  $name_gen= hexdec(uniqid());
	//  $image_ext=strtolower($image->getClientOriginalExtension());
	//  $image_name=$name_gen.'.'.$image_ext;
	//  $up_location='Backend/images/';
	//  $last_img=$up_location.$image_name;
	//  $image->move(public_path($up_location),$image_name);

	//  $hashed = Hash::make($request->password);
	//  Admin::insert([
	
    // 'name'=>$request->name,
    // // 'company'=>$request->company,
    // // 'country_id'=>$request->country_id,
    // // 'address'=>$request->address,
    // 'phone'=>$request->phone,
	// 'email'=>$request->email,
	// 'password'=>$hashed,
	// 'image'=>$image_name,
	// ]);
    // //return $admin;
    //     return redirect('Allregisteredadmin');
    // }
    // public function adminindex(Request $request)
    // {
    //     $admins=Admin::all();
    //    // return  $admins;
	// 	//$country=Country::all();
	// 	return view('Admin.Adminregister.index',compact('admins'));
    // //return $admin;
    //    // return view('backend.Adminregister.index');
    // }
    
}
