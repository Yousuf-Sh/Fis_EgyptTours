<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    //
    public function index(){
		$testimonials=Testimonials::all();
		return view('Admin.testimonials.index',compact('testimonials'));
	
}
public function create(){
	$languages=Language::all();
	return view('Admin.testimonials.add',compact('languages'));
  
	
}
public function store(Request $request)
{
    // Find all languages in the request
    $languages = collect($request->all())
        ->keys()
        ->filter(function ($key) {
            return strpos($key, '_title') !== false;
        })
        ->map(function ($key) {
            return str_replace('_title', '', $key);
        })
        ->unique()
        ->values();

    $uploadedImages = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $key => $image) {
            // Check if file exists
            if ($image->isValid()) {
                // Define unique filename and path
                $imagePath = $image->store('media', 'public');
    
                // Store image path in the result array
                $uploadedImages[$key] = $imagePath;
            }
        }
    }

    // Validate each language's attributes
    $validLanguages = $languages->filter(function ($language) use ($request) {
        return $request->filled([
            "{$language}_title",
            "{$language}_description"
        ]);
    });

    $createdSliders = [];
    $englishRecordId = null;

    // First, create the English record
    if ($validLanguages->contains('en')) {
        $englishRecord = Testimonials::create([
            'name' => $request->input('en_title'),
            'review' => $request->input('en_description'),
            'image' => $imagePath, // Ensure there's an image for English
            'language' => 'en',
        ]);
        
        // Store the ID of the English record
        $englishRecordId = $englishRecord->id;
        $createdSliders['en'] = $englishRecord;
    }
	// dd($imagePath);
    // Create sliders for other languages and assign secondary_id for non-English languages
    foreach ($validLanguages as $language) {
        if ($language !== 'en') {
            $testimonial = Testimonials::create([
                'name' => $request->input("{$language}_title"),
                'review' => $request->input("{$language}_description"),
                'image' => $imagePath, // Ensure there's an image for this language
                'language' => $language,
                'secondary_id' => $englishRecordId, // Set the secondary_id to the English record's ID
            ]);

            $createdSliders[$language] = $testimonial;
        }
    }

    return response()->json([
        'message' => 'Sliders created successfully',
        'sliders' => $createdSliders,
        'redirect' => route('testimonials.index'),
    ]);
}

    public function edit($id)
	{
		$testimonials=Testimonials::findOrFail($id);
		return view('Admin.testimonials.edit',compact('testimonials'));
	}
    public function update(Request $request){
		$res=Testimonials::find($request->id);
		
		if ($request->has('Customer')) {
			$res->Customer = $request->input('Customer');
		}
		if ($request->has('name')) {
			$res->name = $request->input('name');
		}
		if ($request->has('description')) {
			$res->description = $request->input('description');
		}

		$image1 = $request->file('image');
		if ($image1) {
			$name_gen = hexdec(uniqid());
			$image_ext = strtolower($image1->getClientOriginalExtension());
			$image_name1 = $name_gen . '.' . $image_ext;
			$up_location = 'Backend/images/';
			$last_img = $up_location . $image_name1;
			$image1->move(public_path($up_location), $image_name1);
			$res->image = $image_name1;
		}
		
		if ($request->has('arabic_Customer')) {
			$res->arabic_Customer = $request->input('arabic_Customer');
		}
		if ($request->has('arabic_name')) {
			$res->arabic_name = $request->input('arabic_name');
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
		return redirect('admin/testimonials');
		}
    public function delete($id)
	{
		
		Testimonials::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
