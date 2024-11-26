<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Http\Request;

use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
		
		//->where('remember_token',$request->input('remember_token'))
       
		//echo 'skd'; exit;
		// $data=select * from `registration` where `role_as=1` is null limit 1
		// $data= DB::table('registration')
		 
		// $email = DB::table('registration')->get();
		// $email= registration::'role_as';
		// return   $email;
		 $path=$request->path();
		// echo $path; exit; 
		// echo $path;
	 if(( $path=="admin/login" || $path=="register" ) &&  (Session::get('loginid'))){
	//echo  Session('role_as'); exit;
		return redirect()->route('admin.dashboard');
	 }
	
	else if (( $path!=="admin/login" && !Session::get('loginid') ) && ($path!=="register" &&  !Session::get('loginid'))){
//echo 'hhhukh'; exit;
		return redirect()->route('admin.login')->with('status','');
	 }


	 return $next($request); 
	
		 
	 
	 
	    
	  
    }
    }
;