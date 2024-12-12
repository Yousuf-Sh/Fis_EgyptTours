<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;
use App\Models\Booking;
use DB;
class BookingController extends Controller
{
	public function index(){
		// $bookings = Booking::all();
		return view('Admin.Booking.index');
	}
}
