<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Language;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs=Blog::where('secondary_id','=','0')
        ->get();
		return view('Admin.blogs.index',compact('blogs'));
    }

  
    public function create()
    {
        $languages=Language::all();
        return view('Admin.blogs.add',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
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
    // dd($languages);

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
// dd($validLanguages);


$createdBlogs = [];
$englishRecordId = null;

// First, create the English record
if ($validLanguages->contains('en')) {
    $englishRecord = Blog::create([
        'title' => $request->input('en_title'),
        'content' => $request->input('en_description'),
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
        $testimonial = Blog::create([
            'title' => $request->input("{$language}_title"),
            'content' => $request->input("{$language}_description"),
            'image' => $imagePath, // Ensure there's an image for this language
            'language' => $language,
            'secondary_id' => $englishRecordId, // Set the secondary_id to the English record's ID
        ]);

        $createdBlogs[$language] = $testimonial;
    }
}

return response()->json([
    'message' => 'Forms submitted successfully',
    'sliders' => $createdBlogs,
    'redirect' => route('blogs.index'),
]);
    }





    public function edit($id)
    {
        $PrimaryBlog=Blog::findOrFail($id);
		$blogs=Blog::where('secondary_id',$id)->get();
		// dd($testimonials);
		$languages = Language::all();
		return view('Admin.blogs.edit',compact('blogs','languages','PrimaryBlog'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
    $PrimaryBlog = Blog::findOrFail($id);

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
        // dd($languages);
	

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
    }else if($PrimaryBlog->image){
        $imagePath =$PrimaryBlog->image;
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
        $blogData = [
            'title' => $request->input('en_title'),
            'content' => $request->input('en_description'),
            'image' => $imagePath, 
            'language' => 'en',
        ];
        // dd($blogData);  


        // If the language is not 'en', add the secondary_id
        if ($language !== 'en') {
            $blogData['secondary_id'] = $id;
            $blog = Blog::where('secondary_id','=',$id)
            ->where('language','=',$language)
            ->first();
            if($blog){
                $blog->update($blogData);
                $createdSliders[$language] = $blog;
            } 
            else{
                $newTestimonial= Blog::create($blogData);
                $createdSliders[$language] = $newTestimonial;
            }          
        }else {
            $PrimaryBlog->update($blogData);
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
        'redirect' => route('blogs.index')
    ]);
    }

    public function delete($id){
        
       
    $blogs = Blog::where('secondary_id', '=', $id)->get();

    foreach ($blogs as $blog) {
        $blog->delete();
    }
    $primaryBlog = Blog::find($id);
    if ($primaryBlog) {
        $primaryBlog->delete();
    }   

        return redirect()->back()->with('message','success');
    }
}
