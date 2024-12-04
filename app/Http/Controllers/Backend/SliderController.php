<?php
namespace App\Http\Controllers\Backend;
use App\Models\Language;
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
		$slider=Slider::where('secondary_id','=','0')
        ->get();
		$languages = Language::all();
		return view('Admin.home-slider.index',compact('slider','languages'));
	
}

public function create(){
	$languages = DB::table('languages')->get();
	return view('Admin.home-slider.add',compact('languages'));
	
}
public function store(Request $request)
{
    // dd( $request->allFiles());
    
    // Check if a video file is present
    $uploadedVideo = null;
    if ($request->hasFile('videos')) {
        foreach ($request->file('videos') as $key => $video) {
            // Check if file exists and is valid
            if ($video->isValid()) {
                // Store video in the media directory
                $videoPath = $video->store('media/videos', 'public');
                $uploadedVideo = $videoPath;
                break; // Assuming single video upload
            }
        }
    }
    // dd($uploadedVideo);

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
        
        // Validate each language's attributes
        $validLanguages = $languages->filter(function ($language) use ($request) {
            return $request->filled([
                "{$language}_title",
                "{$language}_btn",
                "{$language}_description"
            ]);
        });
    // dd($validLanguages);
        
    $createdSliders= [];
    $englishRecordId = null;

    // First, create the English record
    if ($validLanguages->contains('en')) {
        $englishRecord = Slider::create([
            'title' => $request->input('en_title'),
            'description' => $request->input('en_description'),
            'video_path' => $uploadedVideo, 
            'button_text' => $request->input('en_btn'), 
            'language' => 'en',
            
        ]);

        // Store the ID of the English record
        $englishRecordId = $englishRecord->id;
        // dd($englishRecordId);
        $createdSliders['en'] = $englishRecord;
    }

    // Create blogs for other languages and assign secondary_id for non-English languages
    foreach ($validLanguages as $language) {
        if ($language !== 'en') {
            $blog = Slider::create([
                'secondary_id' => $englishRecordId,
                'title' => $request->input("{$language}_title"),
                'description' => $request->input("{$language}_description"),
                'button_text' => $request->input("{$language}_btn"),
                'video_path' => $uploadedVideo,
                'language' => $language,
                
            ]);
            $createdSliders[$language] = $blog;
            // dd($createdSliders);
        }
    }

    return response()->json([
        'message' => 'Forms submitted successfully',
        'blogs' => $createdSliders,
        'redirect' => route('blogs.index'),
    ]);
}
	public function edit($id)
	{
		$slider=Slider::findOrFail($id);
		
		return view('Admin.home-slider.edit',compact('slider'));
	}

	public function update(Request $request){
	
    dd( $request->allFiles());
    
    // Check if a video file is present
    $uploadedVideo = null;
    if ($request->hasFile('videos')) {
        foreach ($request->file('videos') as $key => $video) {
            // Check if file exists and is valid
            if ($video->isValid()) {
                // Store video in the media directory
                $videoPath = $video->store('media/videos', 'public');
                $uploadedVideo = $videoPath;
                break; // Assuming single video upload
            }
        }
    }
    // dd($uploadedVideo);

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
        
        // Validate each language's attributes
        $validLanguages = $languages->filter(function ($language) use ($request) {
            return $request->filled([
                "{$language}_title",
                "{$language}_btn",
                "{$language}_description"
            ]);
        });
    // dd($validLanguages);
        
    $createdSliders= [];
    $englishRecordId = null;

    // First, create the English record
    if ($validLanguages->contains('en')) {
        $englishRecord = Slider::create([
            'title' => $request->input('en_title'),
            'description' => $request->input('en_description'),
            'video_path' => $uploadedVideo, 
            'button_text' => $request->input('en_btn'), 
            'language' => 'en',
            
        ]);

        // Store the ID of the English record
        $englishRecordId = $englishRecord->id;
        // dd($englishRecordId);
        $createdSliders['en'] = $englishRecord;
    }

    // Create blogs for other languages and assign secondary_id for non-English languages
    foreach ($validLanguages as $language) {
        if ($language !== 'en') {
            $blog = Slider::create([
                'secondary_id' => $englishRecordId,
                'title' => $request->input("{$language}_title"),
                'description' => $request->input("{$language}_description"),
                'button_text' => $request->input("{$language}_btn"),
                'video_path' => $uploadedVideo,
                'language' => $language,
                
            ]);
            $createdSliders[$language] = $blog;
            // dd($createdSliders);
        }
    }

    return response()->json([
        'message' => 'Forms submitted successfully',
        'blogs' => $createdSliders,
        'redirect' => route('blogs.index'),
    ]);
	}
}


    