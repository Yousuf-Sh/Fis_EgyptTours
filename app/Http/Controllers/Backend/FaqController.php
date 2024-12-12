<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Language;

use DB;
use App\Models\Question_description;
class FaqController extends Controller
{
    //
    public function index(){
		$faq=Faq::where('secondary_id','=','0')
        ->get();
       //    $Question_description= Question_description::all();
		return view('Admin.faq.index',compact('faq'));
	
}

public function create(){
    $languages=Language::all();
	return view('Admin.faq.add',compact('languages'));
	
}


public function update(Request $request, $id)
    {
        // dd($request);
    $PrimaryQuestion = Faq::findOrFail($id);
    // dd($PrimaryQuestion);

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
        $imagePath = null; // Initialize the variable
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                // Check if the file is valid
                if ($image->isValid()) {
                    // Define unique filename
                    $filename = time() . '_' . $image->getClientOriginalName();
        
                    // Move the file to the public/Frontend/images directory
                    $image->move(public_path('Frontend/images'), $filename);
        
                    // Define the relative path to be stored
                    $imagePath = 'Frontend/images/' . $filename;
        
                    // Store the path in the array
                    $uploadedImages[$key] = $imagePath;
                }
            }
        }else if($PrimaryQuestion->image){
        $imagePath =$PrimaryQuestion->image;
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
    foreach ($validLanguages as $key => $language) {
        // Default data for the testimonial
        $questionData = [
            'question' => $request->input("{$language}_title"),
            'answer' => $request->input("{$language}_description"),
            'secondary_id'=>'0',
            'language' => $language,
        ];
        // if ($language !== 'en') {$questionData['secondary_id'] = $id;}
        // $allQuestionData[] = $questionData;


        // If the language is not 'en', add the secondary_id
        if ($language !== 'en') {
            $questionData['secondary_id'] = $id;
            $faq = Faq::where('secondary_id','=',$id)
            ->where('language','=',$language)
            ->first();
            if($faq){
                $faq->update($questionData);
                $createdSliders[$language] = $faq;
            } 
            else{
                $newTestimonial= Faq::create($questionData);
                $createdSliders[$language] = $newTestimonial;
            }          
        }else {
            $PrimaryQuestion->update($questionData);
        }
    }

    return response()->json([
        'message' => 'Forms submitted successfully',
        'sliders' => $createdSliders,
        'redirect' => route('faq.index')
    ]);
    }


public function store(Request $request)
{
// dd('hello');
        // dd($request)->all();
        
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


$createdQuestion = [];
$englishRecordId = null;

// First, create the English record
if ($validLanguages->contains('en')) {
    
    $englishRecord = Faq::create([
        'question' => $request->input('en_title'),
        'answer' => $request->input('en_description'),
        'secondary_id' => '0', // Set the secondary_id to the English record's ID

        'language' => 'en',
    ]);
    
    // Store the ID of the English record
    $englishRecordId = $englishRecord->id;
    $createdQuestion['en'] = $englishRecord;
}
// dd($imagePath);
// Create sliders for other languages and assign secondary_id for non-English languages
foreach ($validLanguages as $language) {
    if ($language !== 'en') {
        $question = Faq::create([
            'question' => $request->input("{$language}_title"),
            'answer' => $request->input("{$language}_description"),
            'language' => $language,
            'secondary_id' => $englishRecordId, // Set the secondary_id to the English record's ID
        ]);

        $createdQuestion[$language] = $question;
    }
}
// dd($createdQuestion);

return response()->json([
    'message' => 'Forms submitted successfully',
    'sliders' => $createdQuestion,
    'redirect' => route('faq.index'),
]);
}


	public function edit($id)
	{
        $primaryQuestion= Faq::findOrFail($id);
        $questions = Faq::where('secondary_id',$id)->get();
        // dd($questions);
		$languages = Language::all();

        return view('Admin.faq.edit',compact('primaryQuestion','languages','questions'));

    }
	public function delete($id)
	{
        $faqs = Faq::where('secondary_id', '=', $id)->get();

        foreach ($faqs as $faq) {
            $faq->delete();
        }
        $primaryQuestion = Faq::find($id);
        if ($primaryQuestion) {
            $primaryQuestion->delete();
        }
    
        
        return redirect()->back()->with('message', 'FAQ deleted successfully.');

	}
}