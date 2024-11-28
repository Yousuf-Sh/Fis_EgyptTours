<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\CMS;
use Illuminate\Support\Facades\Storage;

use DB;
class PagesController extends Controller
{
    //
    public function index(){
		//return 'szfds';
		$cms=CMS::where('slug','=','explore-more')
		->get();
		return view('Admin.cmspages.index',compact('cms'));
	
}
public function create(){
	$cms=CMS::all();
		
	return view('Admin.cmspages.add',compact('cms'));
  
	
}
public function store(Request $request){
	$image=$request->file('image');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$image->move(public_path($up_location),$image_name);
	$cmsID=CMS::insert([
	'title'=>$request->title,
	'tagline'=>$request->tagline,
	'short_description'=>$request->short_description,
	'description'=>$request->description,
	'image'=>$image_name,
	]);

	$items = $request->all('cms');
	return redirect('admin/cms');
	}
    public function edit($id)
{
    // Fetch the main CMS record
    $primaryCms = CMS::findOrFail($id);
	
    // Find all related CMS records including the primary one
    $cmsRecords = CMS::where('slug', 'like', 'explore-more%')
	->get()
	->keyBy(function ($item) {
		return $item->slug === 'explore-more' ? 'en' : str_replace('explore-more-', '', $item->slug);
	});
	
	// dd($cmsRecords);

    // Fetch all languages
    $languages = Language::all();

    return view('Admin.cmspages.edit', [
        'cmsRecords' => $cmsRecords,
        'primaryCms' => $primaryCms,
        'languages' => $languages,
    ]);
}
public function update(Request $request, $id)
{
    // Find the primary CMS record
    $primaryCms = CMS::findOrFail($id);
    
    // Array to track updated records
    $updatedRecords = [];
    
    // Identify the languages from the input fields
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
    
    // Process CMS records for each language
    foreach ($languages as $language) {
        // Skip if required fields are not filled
        if (!$request->filled([
            "{$language}_title",
            "{$language}_para_1",
            "{$language}_para_2"
        ])) {
            continue;
        }
        
        // Handle image upload for this language (if exists)
        $imagePath = null;
        if ($request->hasFile("{$language}_image")) {
            // Find the existing CMS record for the current language
            $existingCms = CMS::where('slug', $language === 'en' ? 'explore-more' : "explore-more-{$language}")->first();
            
            // Delete existing image if it exists
            if ($existingCms && $existingCms->image) {
                Storage::disk('public')->delete($existingCms->image);
            }
            
            // Store new image
            $imagePath = $request->file("{$language}_image")->store('cms', 'public');
        }
        
        // Prepare CMS data
        $cmsData = [
            'title' => $request->input("{$language}_title"),
            'short_description' => $request->input("{$language}_para_1"),
            'short_description1' => $request->input("{$language}_para_2"),
            'slug' => $language === 'en' ? 'explore-more' : "explore-more-{$language}",
        ];
		// dd($cmsData);
        
        // Add image path if provided
        if ($imagePath) {
            $cmsData['image'] = $imagePath;
        }
        
        // Find or create CMS record for this language
        $existingCms = CMS::where('slug', $cmsData['slug'])->first();
        if ($existingCms) {
            $existingCms->update($cmsData);
            $updatedRecords[] = $existingCms->slug;
        } else {
            $newCms = CMS::create($cmsData);
            $updatedRecords[] = $newCms->slug;
        }
    }
    
    // Return JSON response instead of redirect
    return response()->json([
        'message' => 'CMS pages updated successfully.',
        'updated_records' => $updatedRecords,
        'redirect' => route('cms_index')
    ]);
}



		
		
    public function delete($id)
	{
		
		CMS::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
