<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
class CategoryController extends Controller
{
    //
	
	
	public function index(){
		$category=Category::all();
		return view('Admin.category.index',compact('category'));
	
}
	public function create(){
		
	return view('Admin.category.add');
	
}
	public function store(Request $request){
	Category::insert([
	'category_name'=>$request->category_name,
	'created_at'=>Carbon::now(),
	]);
	return redirect('admin/category');
	}
	public function edit($id)
	{
		$category=Category::findOrFail($id);
		return view('Admin.category.edit',compact('category'));
	}

	// public function update(Request $request){
	// dd($request->all());
	// }
	public function update(Request $request){
		// dd($request->id);
		$res=Category::find($request->id);
		$res->category_name=$request->input('category_name');
        $res->save();
		return redirect('admin/category');
		}
	public function delete($id)
	{
		Category::findOrFail($id)->delete();
		DB::table('sub_categories')->where('category_id', $id)->delete();
		DB::table('committee_list')->where('category_id', $id)->delete();
		return redirect()->back();

	}
	
}
