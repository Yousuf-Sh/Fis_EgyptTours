<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\CMS;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

use DB;
class PagesController extends Controller
{
    //
    public function index(){
		//return 'szfds';
		$cms=CMS::where('slug','=','explore-more')
        ->orWhere('slug','=','about-services')
        ->orWhere('slug','=','memories')
        ->orWhere('slug','=','tour-video')
        ->orWhere('slug','=','faq')
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
    $slugToSearch = $primaryCms->slug;
    // dd($slugToSearch);
	
    // Find all related CMS records including the primary one
    $cmsRecords = CMS::where('slug', 'like', "{$slugToSearch}%")
    ->get()
    ->keyBy(function ($item) use ($slugToSearch) {
        return $item->slug === $slugToSearch
            ? 'en'
            : str_replace("{$slugToSearch}-", '', $item->slug);
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
    // dd($request);
    // Find the primary CMS record
    $primaryCms = CMS::findOrFail($id);
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

    // Use `dd` to check uploaded image paths
    foreach ($uploadedImages as $imageKey => $imagePath) {
        // Check if the CMS record has a field for the image (e.g., 'image1', 'image2', etc.)
        if (Schema::hasColumn('cms', $imageKey)) {
            // Assign the image path to the corresponding column in the database
            $primaryCms->{$imageKey} = $imagePath;
        }
    }

    // Save the updated primary CMS record
    $primaryCms->save();
    
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
        // dd($languages);
    
    // Process CMS records for each language
    foreach ($languages as $language) {
        
        if($id==135){
        
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

        }else if($id==144){
        }else if($id==153){
        }else if($id==162){
        }else if($id==144){
            // dd('HELLO');
        
            // Skip if required fields are not filled
            if (!$request->filled([
                "{$language}_title",
                "{$language}_btn",
                "{$language}_para_1",
                "video_link"
            ])) {
                continue;
            }
            
            // Handle image upload for this language (if exists)
            $imagePath = null;
            if ($request->hasFile("{$language}_image")) {
                // Find the existing CMS record for the current language
                $existingCms = CMS::where('slug', $language === 'en' ? 'tour-video' : "tour-video-{$language}")->first();
                
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
                'title1' => $request->input("{$language}_btn"),
                'title2' => $request->input("video_link"),
                'short_description' => $request->input("{$language}_para_1"),
                'slug' => $language === 'en' ? 'tour-video' : "tour-video-{$language}",
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
