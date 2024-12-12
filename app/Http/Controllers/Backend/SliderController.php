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
        $PrimarySlider=Slider::findOrFail($id);
		$sliders=Slider::where('secondary_id',$id)->get();
		$languages = Language::all();
		return view('Admin.home-slider.edit',compact('sliders','languages','PrimarySlider'));
	}






	public function update(Request $request)
{
    // // dd($id);
    // dd($request->all()); 
    // dd($request->allFiles()); 
    // Find the primary slider by ID
    $PrimarySlider = Slider::findOrFail($request->input('primary_id'));
    $id=$PrimarySlider->id;

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

    // Save uploaded videos
    $uploadedMedia = null;
    if ($request->hasFile('videos')) {
        foreach ($request->file('videos') as $video) {
            if ($video->isValid()) {
                $uploadedMedia = $video->store('media/videos', 'public');
                break; // Assuming single video upload
            }
        }
    }

    // Save uploaded images
    $uploadedImage = null;
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            if ($image->isValid()) {
                $uploadedImage = $image->store('media', 'public');
                break; // Assuming single image upload
            }
        }
    } else if ($PrimarySlider->media_path) {
        $uploadedMedia = $PrimarySlider->media_path;
    }

    // Validate each language's attributes
    $validLanguages = $languages->filter(function ($language) use ($request) {
        return $request->filled([
            "{$language}_title",
            "{$language}_description",
            "{$language}_btn"
        ]);
    });
        // dd($validLanguages);


    $createdSliders = [];

    // Update sliders for valid languages
    foreach ($validLanguages as $language) {
        $sliderData = [
            'title' => $request->input("{$language}_title"),
            'description' => $request->input("{$language}_description"),
            'button_text' => $request->input("{$language}_btn"),
            'button_link' => $request->input("{$language}_btn_link"),
            'media_path' => $uploadedMedia,
            'language' => $language,
        ];
        // dd($sliderData);

        if ($language !== 'en') {
            $sliderData['secondary_id'] = $id;

            // Update or create the slider for the non-English language
            $slider = Slider::where('secondary_id', '=', $id)
                ->where('language', '=', $language)
                ->first();

            if ($slider) {
                $slider->update($sliderData);
                $createdSliders[$language] = $slider;
            } else {
                $newSlider = Slider::create($sliderData);
                $createdSliders[$language] = $newSlider;
            }
        } else {
            // Update the primary slider for English
            $PrimarySlider->update($sliderData);
        }
    }

    return response()->json([
        'message' => 'Forms submitted successfully',
        'sliders' => $createdSliders,
        'redirect' => route('slider.index'),
    ]);
}
public function delete($id){
        
       
    $sliders = Slider::where('secondary_id', '=', $id)->get();

    foreach ($sliders as $slider) {
        $slider->delete();
    }
    $primarySlider = Slider::find($id);
    if ($primarySlider) {
        $primarySlider->delete();
    }   

        return redirect()->back()->with('message','success');
    }

}


    