<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Verification;
use App\Models\User;
use App\Models\Auctionreport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return view('backend.pages-login');
    }
    public function signin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])) {

            $user = auth()->guard('admin')->user();
            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
            // Authentication successful
            // $request->session()->put('MEMBER_LOGIN', true);
            // $request->session()->put('USER_ID', $user->id);
        }
        return back()->with('error', 'Invaild Email Or Password');
        // $result = Admin::where(['email' => $email, 'password' => $password])->get();
        // if (isset($result['0']->id))
        // {
        //     $request->session()->put('ADMIN_LOGIN', true);
        //     $request->session()->put('ADMIN_ID', $result['0']->id);
        //     return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
        // }
        // else
        //     {
        //     return back()->with('error', 'Invaild Email Or Password');
        //     }
    }
    public function index(Request $request)
    {
        $guests = Verification::where('user_id', '000')->count();
        $auctionReport = Auctionreport::count();
        $users = User::count();
        $currentMonth = Carbon::now();

        // Go back 2 months
        $startMonth = $currentMonth->subMonths(0);
        
        // Extract the month number (e.g., 1 for January, 2 for February, etc.)
        $currentMonth_limit = $startMonth->month;

        $monthlyCountsusers = [];

        for ($month = $currentMonth_limit; $month <= 12; $month++) {
            $currentMonth = str_pad($month, 2, '0', STR_PAD_LEFT);
        
            $count = User::whereMonth('created_at', $currentMonth)->count();
        
            $monthlyCountsusers[] = $count;
        }
        $monthlyCountauctionReport = [];

        for ($month = $currentMonth_limit; $month <= 12; $month++) {
            $currentMonth = str_pad($month, 2, '0', STR_PAD_LEFT);
        
            $count = auctionReport::whereMonth('created_at', $currentMonth)->count();
        
            $monthlyCountauctionReport[] = $count;
        }
        $monthlyCountguests = [];

        for ($month = $currentMonth_limit; $month <= 12; $month++) {
            $currentMonth = str_pad($month, 2, '0', STR_PAD_LEFT);
        
            $count = Verification::where('user_id', '000')->whereMonth('created_at', $currentMonth)->count();
        
            $monthlyCountguests[] = $count;
        }
        // dd($monthlyCounts);
        $currentYear = Carbon::now()->year;
        $usersyear = User::whereYear('created_at', $currentYear)->count();
        return view('backend.index', compact('guests', 'auctionReport', 'users','monthlyCountsusers','monthlyCountauctionReport','monthlyCountguests'));
        //   }

    }

    public function eventreport()
    {
        $record = Events::all();

        return view('backend.reports.event-report', compact('record'));
    }

    public function organizationreport()
    {
        $record = DB::table('organizations')->get();
        return view('backend.reports.organization-report', compact('record'));
    }

    public function volunteerreport()
    {
        $record = DB::table('member__join__orgs')->get();
        return view('backend.reports.volunteer-report', compact('record'));
    }


    public function users_profile()
    {
        return 'hj';
        $record = auth()->guard('admin')->user();
        return view('backend.users-profile', compact('record'));
    }
    public function profile_update(Request $request)
    {
       // return 'hj';
        $data = new Admin();
        return $data;
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
        return  'yu';
        $data = new Admin();
        $data = Admin::findOrFail($request->id);
        $data->password = Hash::make($request->input('password'));
        return  $data;
        $data->save();
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
		return redirect('admin');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete_admin_img($id)
    {
        $res = Admin::find($id);
        $res->image = null;
        $res->save();
        return redirect('admin/users-profile');
    }
}
