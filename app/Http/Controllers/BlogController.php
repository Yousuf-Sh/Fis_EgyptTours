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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
