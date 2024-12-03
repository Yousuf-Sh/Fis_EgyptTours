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
		$testimonials=Testimonials::where('secondary_id','=','0')
        ->get();
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
        'message' => 'Forms submitted successfully',
        'sliders' => $createdSliders,
        'redirect' => route('testimonials.index'),
    ]);
}

    public function edit($id)
	{
		$PrimaryTestimonial=Testimonials::findOrFail($id);
		$testimonials=Testimonials::where('secondary_id',$id)->get();
		// dd($testimonials);
		$languages = Language::all();
		return view('Admin.testimonials.edit',compact('testimonials','languages','PrimaryTestimonial'));
	}
    
    
    public function update(Request $request,$id)
{
	// dd($request);
    $Primarytestimonial = Testimonials::findOrFail($id);

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
				// dd($imagePath);
                // Store image path in the result array
                $uploadedImages[$key] = $imagePath;
            }
        }
    }else if($Primarytestimonial->image){
        $imagePath =$Primarytestimonial->image;
    }

    // Validate each language's attributes
    $validLanguages = $languages->filter(function ($language) use ($request) {
        return $request->filled([
            "{$language}_title",
            "{$language}_description"
        ]);
    });
	// dd($validLanguages);
    $createdSliders = [];

    // Create sliders for valid languages
    foreach ($validLanguages as $language) {
        // Default data for the testimonial
        $testimonialData = [
            'name' => $request->input("{$language}_title"),
            'review' => $request->input("{$language}_description"),
            'image' => $imagePath ?? 'media/',
            'language' => $language
        ];


        // If the language is not 'en', add the secondary_id
        if ($language !== 'en') {
            $testimonialData['secondary_id'] = $id;
            $testimonial = Testimonials::where('secondary_id','=',$id)
            ->where('language','=',$language)
            ->first();
            if($testimonial){
                $testimonial->update($testimonialData);
                $createdSliders[$language] = $testimonial;
            } 
            else{
                $newTestimonial= Testimonials::create($testimonialData);
                $createdSliders[$language] = $newTestimonial;
            }          
        }else {
            $Primarytestimonial->update($testimonialData);
        }

        // Create the testimonial
        // $testimonial = Testimonials::where('secondary_id','=',$id)
        // ->where('language','=',$language)
        // ->get();
        // dd($testimonial);
        
        // Store the created testimonial in the createdSliders array
        // $createdSliders[$language] = $testimonial;
    }

    return response()->json([
        'message' => 'Forms submitted successfully',
        'sliders' => $createdSliders,
        'redirect' => route('testimonials.index')
    ]);
}

}
