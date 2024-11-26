<?php
namespace App\Http\Controllers\Backend;
use App\Models\LiveProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use App\Models\Project;
class ProjectController extends Controller
{
    //
    public function index(){
		//return 'dfd';
		$project=Project::all();

		return view('Admin.project.index',compact('project'));
	
}

public function create(){
		
	return view('Admin.project.add');
	
}
public function store(Request $request){
	$request->validate([
		'images' => 'required',
		
	  ]);
	$data= new Project();

	if ($request->hasFile('images')) {
		$image1 = $request->file('images');
		if ($image1->isValid()) {
			 $images=$request->file('images');
			 $name_gen= hexdec(uniqid());
			 $image_ext=strtolower($images->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $images->move(public_path($up_location),$image_name);
			 $data->images =$image_name;
		}
	}
		 $data->title=$request->title;
		 $data->description=$request->short_description;
		 $data->save();

				 $data->save();
		
				 if ($request->hasFile('arabic_image')) {
					$arabic_image = $request->file('arabic_image');
					if ($arabic_image->isValid()) {
						$name_gen = hexdec(uniqid());
						$image_ext = strtolower($arabic_image->getClientOriginalExtension());
						$arabic_image_name = $name_gen . '.' . $image_ext;
						$up_location = 'Backend/images/';
						$arabic_image->move(public_path($up_location), $arabic_image_name);
					}
				}
				
				// Update the record with Arabic fields
				
				$data->arabic_title = $request->arabic_title;
				
				$data->arabic_description = $request->arabic_description;
				$data->arabic_image = $arabic_image_name ?? null;
				$data->save();
	return redirect('/admin/projectmangement');
	}

	public function edit($id)
	{
		$project=Project::findOrFail($id);
		
		return view('Admin.project.edit',compact('project'));
	}

	public function update(Request $request){
		$res=Project::find($request->id);
		$image1 = $request->file('images');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->images = $image_name1;
		}
		

		if ($request->has('title')) {
			$res->title = $request->input('title');
		}
		//return $res->title;
		if ($request->has('short_description')) {
			$res->description = $request->input('short_description');
		}
		$res->save();

		//return $res;
		
		
		if ($request->has('arabic_title')) {
			$res->arabic_title = $request->input('arabic_title');
		}
		
		if ($request->has('arabic_description')) {
			$res->arabic_description = $request->input('arabic_description');
		}
	
		$image1 = $request->file('arabic_image');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->arabic_image= $image_name1;
		}
		

		
        $res->save();
		return redirect('/admin/projectmangement');
		}
	public function delete($id)
	{
		Project::findOrFail($id)->delete();
	   return redirect()->back();

	}
}


    
