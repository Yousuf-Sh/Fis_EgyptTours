<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicesdetail;
class ServicesDetailsController extends Controller
{
    public function index(){
        // return 'ff';
		// $services=Services::all();
		return view('Admin.ServicesDetails.add');
}
}