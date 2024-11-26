<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pest;

class PestController extends Controller
{
    //
    public function index(){
        $pest=Pest::all();
	//	return 'pest;
		return view('Admin.pest.index',compact('pest'));
	
}
public function create(){
	return view('Admin.pest.add');
	
}
public function store(Request $request){
	//return 'kjk';
    $pest = new Pest();
   
    $pest->name = $request->name;
    $pest->arabic_name = $request->arabic_name;
    $pest->short_description  = $request->short_description;
    $pest->arabic_short_description  = $request->arabic_short_description;

      $pest->save();
		// $data->save();
	return redirect('/admin/pest');
	}
    public function edit($id)
	{
		$pest=Pest::findOrFail($id);
		return view('Admin.pest.edit',compact('pest'));
	}
    public function update(Request $request){
		// $res=Pest::find($request->id);
		// $res->title=$request->input('title');

		$res=Pest::find($request->id);
        if ($request->has('name')) {
            $res->name = $request->input('name');
        }
       
	
        if ($request->has('arabic_name')) {
            $res->arabic_name = $request->input('arabic_name');
        }
        
        if ($request->has('arabic_short_description')) {
            $res->arabic_short_description = $request->input('arabic_short_description');
        }
      
        
        
        
        $res->save();
		return redirect('/admin/pest');
		}
public function delete($id)
	{
		Pest::findOrFail($id)->delete();
	   return redirect()->back();

	}
}

