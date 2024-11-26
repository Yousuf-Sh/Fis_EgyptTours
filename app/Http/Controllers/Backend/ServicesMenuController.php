<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicesmenu;
use App\Models\Services;
use DB;
class ServicesMenuController extends Controller
{
    //
    public function index(){
	//	return 'df';
		$Servicesmenu=Servicesmenu::all();
		//return $Servicesmenu;
		return view('Admin.servicesmenu.index',compact('Servicesmenu'));
	
}
public function create(){
	$Servicesmenu=Servicesmenu::all();
	$services=Services::all();
	return view('Admin.servicesmenu.add',compact('services'));
  
	
}
public function store(Request $request){
	//return 'imran kahn';
	//return $request->name;
	$latestService = Services::latest()->first();
$lastInsertedId = $latestService->id;
	//return $lastInsertedId ;
	$data=array([
		'menuname'=>$request->menuname,
		'arabic_menuname'=>$request->arabic_menuname,
		'status'=>$request->status,
	'slug'=>$request->slug,
	'services_id'=>$lastInsertedId,
    
 ///  'location'=>$request->location,
	]);
//return $data;
	$result=DB::table('Servicesmenus')->insert($data);
	//return $result;
	
       
	return redirect('admin/servicesmenu');
	}
     public function edit($id)
	{
		//return $id;
		//$cms=CMS::findOrFail($id);
		$Servicesmenu=Servicesmenu::findOrFail($id);

	//	return $Servicesmenu;
	//	$Servicesmenu=Servicesmenu::all();
		//dd($Servicesmenu);
		return view('Admin.servicesmenu.edit',compact('Servicesmenu'));
	}
    public function update(Request $request){
		// dd($request->id);
	
		$res=Servicesmenu::find($request->id);
		//dd($request->arabic_menuname);
		Servicesmenu::where('id',$request->id)->update(['menuname'=>$request->menuname,'arabic_menuname'=>$request->arabic_menuname,'status'=>$request->status,
	//'pagelink'=>$request->pagelink,
		]);
     
		return redirect('admin/servicesmenu');
		}
		
    public function delete($id)
	{
		
       Servicesmenu::findOrFail($id)->delete();
	   return redirect()->back();

	}
    public function show($slug)
{
    // Fetch the page content based on the slug
    //Services
   // return $slug;
   
    try {
        // Fetch the page content based on the slug
        //$page = Servicesmenu::where('slug', $slug)->where('status', 'enabled')->firstOrFail();
        $service = Servicesmenu::with('service')->where('slug', $slug)->where('status', 'enabled')->firstOrFail();
//$service = $page->service;
		//$service = $page->service;
        // Pass the content to the view
		//return $page;
        return view('front.show', compact('service'));
    } catch (ModelNotFoundException $e) {
        return response()->view('errors.404', [], 408); // Custom 404 view
    }
    //return view('front.show', compact('service'));
}
}

