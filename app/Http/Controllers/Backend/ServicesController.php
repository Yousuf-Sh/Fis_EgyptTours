<?php
namespace App\Http\Controllers\Backend;
use App\Models\Services;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use DB;
class ServicesController extends Controller
{
    //

    public function index(){
       
		$services=Services::all();
        $languages = DB::table('languages')->get();
		return view('Admin.services.index',compact('services','languages'));
	
}
public function create(){
	
	$services=Services::all();
   
    $languages = DB::table('languages')->get();
	return view('Admin.services.add',compact('services','languages'));
  
	
}




public function store(Request $request)
{
    $languages = Language::all(); // Fetch the languages from the database
    $processedLanguages = []; // Track processed languages

    foreach ($request->all() as $key => $value) {
        if (strpos($key, '_') !== false) {
            $slug = explode('_', $key)[0];

            // Skip if this slug has already been processed
            if (isset($processedLanguages[$slug])) {
                continue;
            }

            // Check if this slug has any data
            $hasData = $request->input("{$slug}_title") ||
                $request->input("{$slug}_feature1") ||
                $request->input("{$slug}_feature2") ||
                $request->input("{$slug}_feature3") ||
                $request->input("{$slug}_feature4") ||
                $request->input("{$slug}_tr_title") ||
                $request->input("{$slug}_tr_description");

            if (!$hasData) {
                continue; // Skip this slug if no data is provided
            }

            // Mark this language as processed
            $processedLanguages[$slug] = true;

            $service = new Services();
            $service->language = $slug; // Store language slug
            $service->title = $request->input("{$slug}_title");
            $service->feature1 = $request->input("{$slug}_feature1", null);
            $service->feature2 = $request->input("{$slug}_feature2", null);
            $service->feature3 = $request->input("{$slug}_feature3", null);
            $service->feature4 = $request->input("{$slug}_feature4", null);
            $service->tr_title = $request->input("{$slug}_tr_title", null);
            $service->tr_description = $request->input("{$slug}_tr_description", null);
            $service->tr_title1 = $request->input("{$slug}_tr_title1", null);
            $service->tr_description1 = $request->input("{$slug}_tr_description1", null);
            $service->tr_title2 = $request->input("{$slug}_tr_title2", null);
            $service->tr_description2 = $request->input("{$slug}_tr_description2", null);

            // Handle Image Upload
            if ($request->hasFile("image")) {
                $image = $request->file("image");
                if ($image->isValid()) {
                    $name_gen = hexdec(uniqid());
                    $image_ext = strtolower($image->getClientOriginalExtension());
                    $image_name = $name_gen . '.' . $image_ext;
                    $up_location = 'Backend/images/';
                    $image->move(public_path($up_location), $image_name);
                    $service->image = $image_name;
                }
            }

            if ($request->hasFile("image1")) {
                $image1 = $request->file("image1");
                if ($image1->isValid()) {
                    $name_gen = hexdec(uniqid());
                    $image_ext = strtolower($image1->getClientOriginalExtension());
                    $image_name1 = $name_gen . '.' . $image_ext;
                    $up_location = 'Backend/images/';
                    $image1->move(public_path($up_location), $image_name1);
                    $service->image1 = $image_name1;
                }
            }
            if ($request->hasFile("image2")) {
                $image1 = $request->file("image2");
                if ($image1->isValid()) {
                    $name_gen = hexdec(uniqid());
                    $image_ext = strtolower($image1->getClientOriginalExtension());
                    $image_name1 = $name_gen . '.' . $image_ext;
                    $up_location = 'Backend/images/';
                    $image1->move(public_path($up_location), $image_name1);
                    $service->image1 = $image_name1;
                }
            }
            if ($request->hasFile("image3")) {
                $image1 = $request->file("image3");
                if ($image1->isValid()) {
                    $name_gen = hexdec(uniqid());
                    $image_ext = strtolower($image1->getClientOriginalExtension());
                    $image_name1 = $name_gen . '.' . $image_ext;
                    $up_location = 'Backend/images/';
                    $image1->move(public_path($up_location), $image_name1);
                    $service->image1 = $image_name1;
                }
            }
            if ($request->hasFile("image4")) {
                $image1 = $request->file("image4");
                if ($image1->isValid()) {
                    $name_gen = hexdec(uniqid());
                    $image_ext = strtolower($image1->getClientOriginalExtension());
                    $image_name1 = $name_gen . '.' . $image_ext;
                    $up_location = 'Backend/images/';
                    $image1->move(public_path($up_location), $image_name1);
                    $service->image1 = $image_name1;
                }
            }
            // Save the service entry
            $service->save();
        }
    }

    return redirect('/admin/services')->with('success', 'Services created successfully!');
}


	public function edit($id,$slug)
	{
		
        $service = Services::where('id', $id)
        ->where('language', $slug)
        ->firstOrFail();
            
      
		//return $services;
       

        $images = Services::select('image', 'image1', 'image2')->get();
   
        $languages = DB::table('languages')->get();
		return view('Admin.services.edit',compact('service','languages','images'));
		
		
	}
	public function update(Request $request){
        
        
		$res = Services::find($request->id);

if ($request->has('title')) {
	$res->title= $request->input('title');
}
if ($request->has('tr_title')) {
	$res->tr_title = $request->input('tr_title');
}
if ($request->has('tr_title1')) {
    $res->tr_title1 = $request->input('tr_title1');
}
if ($request->has('tr_title2')) {
	$res->tr_title2 = $request->input('tr_title2');
}
if ($request->has('feature1')) {
	$res->feature1 = $request->input('feature1');
}

if ($request->has('feature2')) {
	$res->feature2 = $request->input('feature2');
}

if ($request->has('feature3')) {
	$res->feature3 = $request->input('feature3');
}
if ($request->has('feature4')) {
	$res->feature4 = $request->input('feature4');
}
if ($request->has('tr_description')) {
	$res->tr_description = $request->input('tr_description');
}
if ($request->has('tr_description1')) {
	$res->tr_description1 = $request->input('tr_description1');
}
if ($request->has('tr_description2')) {
	$res->tr_description2 = $request->input('tr_description2');
}

if ($request->has('short_description')) {
	$res->short_description = $request->input('short_description');
}


$image1 = $request->file('image');
if ($image1) {
    $name_gen = hexdec(uniqid());
    $image_ext = strtolower($image1->getClientOriginalExtension());
    $image_name1 = $name_gen . '.' . $image_ext;
    $up_location = 'Backend/images/';
    $last_img = $up_location . $image_name1;
    $image1->move(public_path($up_location), $image_name1);
    $res->member_image = $image_name1;
}


if ($request->hasFile('image1')) {
    $images = $request->file('image1');
    if ($images->isValid()) {
        $name_gen = hexdec(uniqid());
        $image_ext = strtolower($images->getClientOriginalExtension());
        $image_names = $name_gen . '.' . $image_ext;
        $up_location = 'Backend/images/';
        $last_img = $up_location . $image_names;
        $images->move(public_path($up_location), $image_names);
        $res->image = $image_names;
    }
    if ($request->hasFile('image2')) {
        $images = $request->file('image2');
        if ($images->isValid()) {
            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($images->getClientOriginalExtension());
            $image_names = $name_gen . '.' . $image_ext;
            $up_location = 'Backend/images/';
            $last_img = $up_location . $image_names;
            $images->move(public_path($up_location), $image_names);
            $res->image = $image_names;
        }
}

}



//return $res;
$res->save();

		
		return redirect('/admin/services');
		}

public function delete($id)
	{
		Services::findOrFail($id)->delete();
	   return redirect()->back();

	}
	public function airportservicesindex(Request $request)
	{
		Services::findOrFail($id)->delete();
	   return redirect()->back();

	}
    
}
