<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Footer;

class SubmissionController extends Controller
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

    public function edit()
	{
		//$Primaryfooter=Footer::get();
		//dd($PrimaryTestimonial);
		$languages = Language::all();
		$footer = Footer::whereIn('language', $languages->pluck('slug'))->get();


		
		return view('Admin.generalsetting.edit',compact('languages','footer'));
	}
    
    
    public function updated(Request $request,$id)
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
public function update(Request $request)
{
	

$languages = $request->input('languages'); // get the selected languages

    foreach ($languages as $slug => $data) {


		
        $data = [
            'description' => $request->input("{$slug}_description"),
            'address' => $request->input("{$slug}_address"),
			'facebook' => $request->input("{$slug}_facebook"),
			'twitter' => $request->input("{$slug}_twitter"),
			'instagram' => $request->input("{$slug}_instagram"),
			'printest' => $request->input("{$slug}_pinterest"),
			'linkdlin' => $request->input("{$slug}_linkedin"),
			'redit' => $request->input("{$slug}_redit"),
			'email' => $request->input("{$slug}_email"),
			'phone1' => $request->input("{$slug}_phone1"),
			'phone2' => $request->input("{$slug}_phone2"),
		//	'image' => $request->input("{$slug}_image"),
            // Add other fields here...
        ];
		if ($request->hasFile("{$slug}_image")) {
			$image = $request->file("{$slug}_image");
			if ($image) {
				// Generate a unique file name
				$imageName = time() . '_' . $image->getClientOriginalName();
		
				// Move the image to the 'public/footer_images' directory
				$image->move(public_path('footer_images'), $imageName);
		
				// Save the image name in the database
				$data['image'] = $imageName;
			}
		}
          
        // Update or create footer data for each language
        Footer::updateOrCreate(
            ['language' => $slug],
            $data
        );
    }

    return redirect()->back()->with('success', 'Data updated successfully for all languages.');
}
    

public function delete($id)
{
   
    $testimonials = Testimonials::where('secondary_id', '=', $id)->get();

    foreach ($testimonials as $testimonial) {
        $testimonial->delete();
    }
    $primaryTestimonial = Testimonials::find($id);
    if ($primaryTestimonial) {
        $primaryTestimonial->delete();
    }

    
    return redirect()->back()->with('message', 'Testimonials deleted successfully.');
}



}
