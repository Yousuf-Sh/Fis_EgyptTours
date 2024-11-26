<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\CommitteeCategory;
use DB;
class SubCategoryController extends Controller
{
    //
    public function index(){
        $subcategory=SubCategory::all();
		return view('Admin.committee-subcategory.index',compact('subcategory'));
	
}
public function create(){
	$category=CommitteeCategory::all();
	return view('Admin.committee-subcategory.add',compact('category'));
	
}
public function store(Request $request){
     SubCategory::insert([
	'title'=>$request->title,
	'category_id'=>$request->category_id,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/committee-subcategory');
	}
    public function edit($id)
	{	
		$category=CommitteeCategory::all();
		$subcategory=SubCategory::findOrFail($id);
		return view('Admin.committee-subcategory.edit',compact('subcategory','category'));
	}
    public function update(Request $request){
		$res=SubCategory::find($request->id);
		$res->title=$request->input('title');
		$res->category_id=$request->input('category_id');
        $res->save();
		
	    return redirect('admin/committee-subcategory');

		}
public function delete($id)
	{
		SubCategory::findOrFail($id)->delete();
		DB::table('committee_list')->where('subcategory_id', $id)->delete();
	   return redirect()->back();

	}
}
