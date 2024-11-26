<?php
namespace App\Http\Controllers\Backend;
use App\Models\LiveProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use DB;

class SliderController extends Controller
{
    //
    public function index(){
		$slider=Slider::all();
		$languages = DB::table('languages')->get();
		return view('Admin.home-slider.index',compact('slider','languages'));
	
}

public function create(){
	$languages = DB::table('languages')->get();
	return view('Admin.home-slider.add',compact('languages'));
	
}
public function store(Request $request)
{
    // $validated = $request->validate([
    //     'en_title' => 'nullable|string',
    //     'ar_title' => 'nullable|string',
    //     'en_button' => 'nullable|string',
    //     'ar_button' => 'nullable|string',
    //     'images' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    // ]);

    // Save uploaded image
    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('sliders', 'public');
    }

    // Insert data into database
    Slider::create([
        'language' => $request->input('language'), // e.g., 'en' or 'ar'
        'title' => $request->input("{$request->language}_title"),
        'button_text' => $request->input("{$request->language}_button"),
        'description' => $request->input("{$request->language}_description"),
        'image_path' => $imagePath ?? null,
    ]);

    return response()->json(['message' => 'Slider created successfully']);
}

	public function edit($id)
	{
		$slider=Slider::findOrFail($id);
		
		return view('Admin.home-slider.edit',compact('slider'));
	}

	public function update(Request $request){
		$res = Slider::find($request->id);
$image = $request->file('images');

if ($image) {
    $name_gen = hexdec(uniqid());
    $image_ext = strtolower($image->getClientOriginalExtension());
    $image_name = $name_gen . '.' . $image_ext;
    $up_location = 'Backend/images/';
    $last_img = $up_location . $image_name;
    $image->move(public_path($up_location), $image_name);
    $res->images = $image_name;
}

if ($request->has('title')) {
    $res->title = $request->input('title');
}

if ($request->has('label')) {
    $res->label = $request->input('label');
}

if ($request->has('button')) {
    $res->button = $request->input('button');
}

if ($request->has('short_description')) {
    $res->short_description = $request->input('short_description');
}

if ($request->has('arabic_title')) {
    $res->arabic_title = $request->input('arabic_title');
}

if ($request->has('arabic_label')) {
    $res->arabic_label = $request->input('arabic_label');
}

if ($request->has('arabic_button')) {
    $res->arabic_button = $request->input('arabic_button');
}

if ($request->has('arabic_short_description')) {
    $res->arabic_short_description = $request->input('arabic_short_description');
}

$res->save();
return redirect('admin/slider');

	
			return redirect('admin/slider');
			}
	public function delete($id)
	{
       Slider::findOrFail($id)->delete();
	   return redirect()->back();

	}
}


    