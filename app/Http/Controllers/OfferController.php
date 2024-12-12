<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Servicesdetail;
use DB;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    
    public function index()
    {
        $offers = Offer::where('language','=','en')->get();
       
        return view('Admin.offers.index',['offers'=>$offers]);
    }

    public function airport_index()
    {
        $offers = DB::table('airport_transfer')->where('language','=','en')->get();
       
        return view('Admin.offers.airport_index',['offers'=>$offers]);
    }

    public function services_details($id)
    {
        $offer = Offer::where('type', 1)->findOrFail($id);

       

        $offers = Offer::where('language','=','en')->get();
        $languages=Language::all();
        $offersByLanguage = [];
    foreach ($languages as $language) {
        $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                  ->where('language', $language->slug)
                                                  ->first();
    }
        return view('Admin.offers.services_details',compact('offer','languages','offersByLanguage'));
    }
    public function update_tour_details(Request $request)
    {
        // Get the primary ID, type, and languages from the request
        $primaryId = $request->input('id'); // Primary ID (English record)
        $type = $request->input('type'); // Type value
        $languages = $request->input('languages'); // Input for languages
    
        foreach ($languages as $language) {
            // Prepare the data for updating
            $offerData = [
                'language' => $language,
                'duration' => $request->input("{$language}_duration"),
                'location' => $request->input("{$language}_location"),
                'pickup' => $request->input("{$language}_pickup"),
                'pickup_type' => $request->input("{$language}_pickup_type"),
                'availability' => $request->input("{$language}_availability"),
                'title_ex' => $request->input("{$language}_title_ex"),
                'description_ex' => $request->input("{$language}_description_ex"),

                'type' => $type,
            ];
    
            if ($language === 'en') {
                // For English (primary record), match by `id`
                $offer = Offer::where('id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            } else {
                // For other languages, match by `secondary_id`
                $offer = Offer::where('secondary_id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            }
    
            if ($offer) {
                // Update the existing record
                $offer->update($offerData);
            } else {
                // Create a new record if it doesn't exist
                $offerData['secondary_id'] = $primaryId; // Set secondary_id for translations
                if ($language === 'en') {
                    $offerData['id'] = $primaryId; // Explicitly set the primary ID for English
                }
                Offer::create($offerData);
            }
        }
    
        // After updating, redirect back
        return redirect()->back();
    }
    
    public function update_description(Request $request)
    {

       
        // Get the primary ID, type, and languages from the request
        $primaryId = $request->input('id'); // Primary ID (English record)
        $type = $request->input('type'); // Type value
        $languages = $request->input('languages'); // Input for languages
    
        foreach ($languages as $language) {
            // Prepare the data for updating
            $offerData = [
                'language' => $language,
                
                'title_ex' => $request->input("{$language}_title_ex"),
                'description_ex' => $request->input("{$language}_description_ex"),

                'type' => $type,
            ];
           
            if ($language === 'en') {
                // For English (primary record), match by `id`
                $offer = Offer::where('id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            } else {
                // For other languages, match by `secondary_id`
                $offer = Offer::where('secondary_id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            }
    
            if ($offer) {
                // Update the existing record
                $offer->update($offerData);
                
            } else {
                // Create a new record if it doesn't exist
                $offerData['secondary_id'] = $primaryId; // Set secondary_id for translations
                if ($language === 'en') {
                    $offerData['id'] = $primaryId; // Explicitly set the primary ID for English
                }
                Offer::create($offerData);
            }
        }
    
        // After updating, redirect back
        return redirect()->back();
    }
    public function update_highlights(Request $request)
    {

       
        // Get the primary ID, type, and languages from the request
        $primaryId = $request->input('id'); // Primary ID (English record)
        $type = $request->input('type'); // Type value
        $languages = $request->input('languages'); // Input for languages
    
        foreach ($languages as $language) {
            // Prepare the data for updating
            $offerData = [
                'language' => $language,
                
                'title_ex' => $request->input("{$language}_title_ex"),
                'description_ex' => $request->input("{$language}_description_ex"),

                'type' => $type,
            ];
           
            if ($language === 'en') {
                // For English (primary record), match by `id`
                $offer = Offer::where('id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            } else {
                // For other languages, match by `secondary_id`
                $offer = Offer::where('secondary_id', $primaryId)
                              ->where('type', $type)
                              ->where('language', $language)
                              ->first();
            }
    
            if ($offer) {
                // Update the existing record
                $offer->update($offerData);
                
            } else {
                // Create a new record if it doesn't exist
                $offerData['secondary_id'] = $primaryId; // Set secondary_id for translations
                if ($language === 'en') {
                    $offerData['id'] = $primaryId; // Explicitly set the primary ID for English
                }
                Offer::create($offerData);
            }
        }
    
        // After updating, redirect back
        return redirect()->back();
    }
    


    public function airport_transfer()
    {
        // $offers = Offer::where('language','=','en')->get();
        $languages=Language::all();
        $sources = DB::table('source')->select('id', 'name')->get();

        $destinations=DB::table('destination')->select('id', 'name')->get();
       
        return view('Admin.offers.airport_transfer',compact('languages','sources','destinations'));
    }
    public function update_airport_transfer(Request $request)
{      
    // dd($request->all());
    $id=$request->input('p_id');
    $request->validate([
        'languages' => 'required|array',
        'passengers' => 'required|integer',
        'bags' => 'required|integer',
        'packages' => 'nullable|array',
        'type' => 'nullable|string',
    ]);

    // Find the existing English offer to use as a reference
    $existingEnglishOffer = DB::table('airport_transfer')
        ->where('id', $id)
        ->where('language', 'en')
        ->first();

    if (!$existingEnglishOffer) {
        return redirect()->back()->with('error', 'Offer not found!');
    }

    $previousId = $id;

    // Process each language
    foreach ($request->input('languages') as $slug => $languageCode) {
        // Prepare the data for updating the Offer
        $offerData = [
            'language' => $slug,
            'title' => $request->input("{$slug}_title"),
            'description' => $request->input("{$slug}_description"),
            'passengers' => $request->input("passengers"),
            'bags' => $request->input("bags"),
            'type' => $request->input("type", 0),
        ];

        // Check if an offer for this language and secondary ID already exists
        $existingOffer = DB::table('airport_transfer')
            ->where('secondary_id', $slug === 'en' ? 0 : $previousId)
            ->where('language', $slug)
            ->first();

        if ($existingOffer) {
            // Update existing offer
            DB::table('airport_transfer')
                ->where('id', $existingOffer->id)
                ->update($offerData);
            $offerId = $existingOffer->id;
        } else {
            // Create new offer if not exists
            $offerData['secondary_id'] = $slug === 'en' ? 0 : $previousId;
            $offerId = DB::table('airport_transfer')->insertGetId($offerData);
        }

        // If it's the English offer, save its ID for use in secondary_id of other languages
        if ($slug === 'en') {
            $previousId = $offerId;
        }

        // Handle packages for English language
        if ($slug === 'en' && $request->has('packages')) {
            foreach ($request->input('packages') as $index => $package) {
                $source = $package['source'] ?? null;
                $destination = $package['destination'] ?? null;
                $type = $package['type'] ?? 0;
                $price = $package['price'] ?? null;
                $time = $package['time'] ?? null;

                // Check if this is an existing package (has a package_id)
                if (isset($package['package_id'])) {
                    // Update existing package
                    DB::table('rate')
                        ->where('id', $package['package_id'])
                        ->update([
                            'source' => $source,
                            'destination' => $destination,
                            'type' => $type,
                            'price' => $price,
                            'time' => $time,
                        ]);
                } else {
                    // Insert new package
                    DB::table('rate')->insert([
                        'language' => $slug,
                        'source' => $source,
                        'destination' => $destination,
                        'type' => $type,
                        'price' => $price,
                        'time' => $time,
                        'secondary_id' => 0,
                        'services_id' => $offerId,
                    ]);
                }
            }
        }
    }

    return redirect()->back()->with('success', 'Offer updated successfully!');
}
    public function airport_transfer_edit($id)
    {
        $pOffer= DB::table('airport_transfer')
        ->where('id','=',$id)->first();
        $offers = DB::table('airport_transfer')
        ->where('id','=',$id)
        ->orWhere('secondary_id',$id)->get();
        $packages=DB::table('rate')->where('services_id',$id)->get();
        $languages=Language::all();
        $sources = DB::table('source')->select('id', 'name')->get();

        $destinations=DB::table('destination')->select('id', 'name')->get();
       
        return view('Admin.offers.airport_transfer_edit',compact('languages',
        'sources','destinations','offers','pOffer',
    'packages'));
    }
    public function tour_description($id)
    {
        $offers = Offer::where('language','=','en')->get();
        $offer = Offer::where('type', 1)->findOrFail($id);
        $languages=Language::all();
        $offersByLanguage = [];
        foreach ($languages as $language) {
            $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                      ->where('language', $language->slug)
                                                      ->first();
        }
        return view('Admin.offers.tour_description',compact('languages','offer','offersByLanguage'));
    }

    public function tour_highlights($id)
    {
       
        $languages=Language::all();
        $offers = Offer::where('language','=','en')->get();
        $offer = Offer::where('type', 1)->findOrFail($id);
        $languages=Language::all();
        $offersByLanguage = [];
        foreach ($languages as $language) {
            $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                      ->where('language', $language->slug)
                                                      ->first();
        }
        return view('Admin.offers.tour_highlights',compact('languages','offer','offersByLanguage','offers'));
    }

    public function tour_inclusions_exclusions()
    {
        $languages=Language::all();
        $offers = Offer::where('language','=','en')->get();
        // $offer = Offer::where('type', 1)->findOrFail($id);
        $languages=Language::all();
        $offersByLanguage = [];
        foreach ($languages as $language) {
            $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                      ->where('language', $language->slug)
                                                      ->first();
        }
        return view('Admin.offers.tour_inclusions_exclusions',compact('languages','offer','offersByLanguage','offers'));
    }

    public function tour_ltinerary()
    {
        $offers = Offer::where('language','=','en')->get();
        $languages=Language::all();
        return view('Admin.offers.tour_ltinerary',compact('languages'));
    }
    public function packages()
    {
        $offers = Offer::where('language','=','en')->get();
        $languages=Language::all();
        return view('Admin.offers.packages',compact('languages'));
    }
    public function gallery($id)
    {
        
        // $offers = Offer::where('language','=','en')->get();
        // $languages=Language::all();

        $languages=Language::all();
        $offers = Offer::where('language','=','en')->get();
        $offer = Offer::where('type', 1)->findOrFail($id);
        $languages=Language::all();
        $offersByLanguage = [];
        foreach ($languages as $language) {
            $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                      ->where('language', $language->slug)
                                                      ->first();
        }
        return view('Admin.offers.gallery',compact('languages','offer','offersByLanguage','offers'));
    }

    
    public function update_gallery(Request $request)
    {
        // dd($request->allFiles());
        $primaryId = $request->input('id'); // Single ID
    $type = $request->input('type');

    // Retrieve uploaded images
    $uploadedImages = $request->file('gallery_images');
    // dd($uploadedImages);

    // Ensure $uploadedImages is always an array
    

    if ($uploadedImages && is_array($uploadedImages)) {
        $imagePaths = '';

        foreach ($uploadedImages as $image) {
            if ($image->isValid()) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('Frontend/images'), $imageName);
                $imagePath = 'Frontend/images/' . $imageName;
                $imagePaths .= $imagePath . ',';
            }
        }
        $imagePaths = rtrim($imagePaths,',');
        // dd($imagePaths);
        // Update or create record in the Servicesdetail model
        $serviceDetail = Servicesdetail::where('services_id', $primaryId)->firstOrFail();
        
        $serviceDetail->type = $type;
   
        $serviceDetail->gallery_images = $imagePaths; // Save as JSON
        
        $serviceDetail->save();
    } else {
        return redirect()->back()->with('error', 'No valid images uploaded.');
    }

    return redirect()->back()->with('success', 'Gallery updated successfully!');
    }
    public function update_reviews(Request $request)
    {
        // dd($request->allFiles());
        $primaryId = $request->input('id'); // Single ID
    $type = $request->input('type');

    if ($request->hasFile('gallery_videos')) {
        $videoPaths = ''; // Initialize as an empty string
        foreach ($request->file('gallery_videos') as $video) {
            if ($video->isValid()) {
                $videoName = time() . '_' . $video->getClientOriginalName();
                $video->move(public_path('Frontend/videos'), $videoName);
                $videoPath = 'Frontend/videos/' . $videoName;
                $videoPaths .= $videoPath . ',';
            }
        }
        
       
        $videoPaths = rtrim($videoPaths, ',');
        // Update or create record in the Servicesdetail model
        $serviceDetail = Servicesdetail::where('services_id', $primaryId)->firstOrFail();
        
        $serviceDetail->type = $type;
   
        $serviceDetail->review_videos = $videoPaths; 
        
        $serviceDetail->save();
    } else {
        return redirect()->back()->with('error', 'No valid videos uploaded.');
    }

    return redirect()->back()->with('success', 'Video Reviews updated successfully!');
    }
    
    public function reviews($id)
    {
          // $offers = Offer::where('language','=','en')->get();
        // $languages=Language::all();

        $languages=Language::all();
        $offers = Offer::where('language','=','en')->get();
        $offer = Offer::where('type', 1)->findOrFail($id);
        $languages=Language::all();
        $offersByLanguage = [];
        foreach ($languages as $language) {
            $offersByLanguage[$language->slug] = Offer::where('type', 1)
                                                      ->where('language', $language->slug)
                                                      ->first();
        }
      
        return view('Admin.offers.reviews',compact('languages','offer','offersByLanguage','offers'));
    }

    
    public function create()
    {
        $languages = Language::all();

        return view('Admin.offers.create',['languages'=>$languages]);
    }

    public function store(Request $request)
{
    // Validate request data
    $request->validate([
        'languages' => 'required|array',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        'passengers' => 'required|integer',
        'bags' => 'required|integer',
        'packages' => 'nullable|array',
    ]);

    // Find all languages in the request
    $languages = $request->input('languages');
    $previousId = null;

    foreach ($languages as $slug => $data) {
        // Prepare the data for inserting the Offer
        $offerData = [
            'language' => $slug,
            'title' => $request->input("{$slug}_title"),
            'description' => $request->input("{$slug}_description"),
            'passengers' => $request->input("passengers"),
            'bags' => $request->input("bags"),
        ];

        if ($slug === 'en') {
            $offerData['secondary_id'] = 0; // English will have 0 as secondary_id
        } else {
            $offerData['secondary_id'] = $previousId; // Other languages reference the last created offer ID
        }

        // Create the offer record
        $offerId = DB::table('airport_transfer')->insertGetId($offerData);

        // Handle image upload
        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            $image = $request->file("image");
            
            // Generate a unique name for the image
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Move the image to the specified directory
            $image->move(public_path('footer_images'), $imageName);
            
            // Update the image path in the offer record
            DB::table('airport_transfer')->where('id', $offerId)->update(['image' => $imageName]);
        }

        // If it's the English offer, save its ID for use in secondary_id of other languages
        $previousId = $offerId;

        // Handle packages if the language is English
        if ($slug === 'en' && $request->has('packages')) {
            foreach ($request->input('packages') as $index => $package) {
                // Validate package data
                $source = $package['source'] ?? null; // Use package-specific source
                $destination = $package['destination'] ?? null; // Use package-specific destination
                $type = $package['type'] ?? null;
                $price = $package['price'] ?? null;

                // Create service detail entry
                DB::table('rate')->insert([
                    'language' => $slug,
                    'source' => $source,
                    'destination' => $destination,
                    'type' => $type,
                    'price' => $price,
                    'secondary_id' => 0,
                    'services_id' => $offerId,
                ]);
            }
        }
    }

    return redirect()->back()->with('success', 'Offer created successfully!');
}


public function store_excursion(Request $request)
{
    $languages = $request->input('languages');
    $previousId = 0; // Variable to store the English offer ID

    foreach ($languages as $slug => $data) {
        // Prepare the data for inserting the Offer
        $offerData = [
            'language' => $slug,
            'title' => $request->input("{$slug}_title"),
            'type' => $request->input("type"),
            'description' => $request->input("{$slug}_description"),
            'secondary_id' => $previousId,
        ];

        // Insert the offer record
      //  $offerId = Offer::insert($offerData);
        $offer = Offer::create($offerData);
        // If it's the English offer, save its ID for use in secondary_id of other languages
        
        $previousId = $offer->id;
        

        // Handle service details for the English language
        if ($slug === 'en') {
            $imageName = null;

            // Handle image upload before inserting the record
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = $request->file('image');

                // Generate a unique name for the image
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Move the image to the specified directory
                $image->move(public_path('footer_images'), $imageName);
            }

            // Insert service detail with image, price, and discount price
            $servicedetailData = [
                'language' => $slug,
                'type' => $request->input('type'),
                'discount_price' => $request->input('discount_price'),
                'price' => $request->input('price'),
                'secondary_id' => 0,
                'services_id' => $previousId,
                'image' => $imageName,
            ];

            Servicesdetail::insert($servicedetailData);
        }
    }

    return redirect()->back()->with('success', 'Excursion details added successfully.');
}


    // $languages = collect($request->all())
    //     ->keys()
    //     ->filter(function ($key) {
    //         return strpos($key, '_title') !== false;
    //     })
    //     ->map(function ($key) {
    //         return str_replace('_title', '', $key);
    //     })
    //     ->unique()
    //     ->values();
    // // Validate each language's attributes
    // $validLanguages = $languages->filter(function ($language) use ($request) {
    //     return $request->filled([
    //         // "{$language}_title",
    //         "{$language}_type",
    //         "{$language}_feature1",
    //         "{$language}_feature2",
    //         "{$language}_feature3"
    //     ]);
    // });

    // $createdOffers = [];

    // // Process image upload
    // $imagePath = null;
    // if ($request->hasFile('images')) {
    //     $imagePath = $request->file('images')->store('offers', 'public');
    // }

    // // Create offers for valid languages
    // foreach ($validLanguages as $language) {
    //     $offer = Offer::create([
    //         'language' => $language,
    //         // 'title' => $request->input("{$language}_title"),
    //         'type' => $request->input("{$language}_type"),
    //         // 'feature1' => $request->input("{$language}_feature1"),
    //         // 'feature2' => $request->input("{$language}_feature2"),
    //         // 'feature3' => $request->input("{$language}_feature3"),
    //         'price' => $request->input("price"),
    //         // 'discount_price' => $request->input("discount_price"),
    //         'description' => $request->input("description"),
            
    //         'image' => $imagePath,
    //         // Default secondary_id to 0
    //         'secondary_id' => 0
    //     ]);

    //     Servicesdetail::create([
    //         'source' => $request->input("{$language}_source"),
    //         'destination' => $request->input("{$language}_destination"),
    //        'secondary_id' => 0,
    //         'services_id' => $offer->id, // Set English ID or current ID
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);


    //     $createdOffers[$language] = $offer;
    // }
    
    // // If 'en' exists, update secondary_id for other languages
    // if (isset($createdOffers['en'])) {
    //     $enOffer = $createdOffers['en'];
        
    //     foreach ($createdOffers as $language => $offer) {
            
    //         if ($language !== 'en') {
    //             $offer->update(['secondary_id' => $enOffer->id]);
    //         }
    //     }
    // }

    // return response()->json([
    //     'message' => 'Offers created successfully', 
    //     'offers' => $createdOffers
    // ]);


public function edit($id)
{
    // Find the primary offer (English record)
    $primaryOffer = Offer::findOrFail($id);

    // Find all related offers (including the primary offer)
    $offers = Offer::where('id', $id)
        ->orWhere('secondary_id', $id)
        ->get()
        ->keyBy('language');

    $languages = Language::all();
    
    return view('Admin.offers.edit', [
        'offers' => $offers,
        'primaryOffer' => $primaryOffer,
        'languages' => $languages
    ]);
}
private function getBoundary(Request $request)
{
    $contentType = $request->header('Content-Type');

    if ($contentType && preg_match('/boundary=(.+)$/', $contentType, $matches)) {
        return trim($matches[1]);
    }

    return null;
}

   
public function update(Request $request, $id)
{
    // Validate basic inputs
    // $content = $request->getContent();
    // $boundary = $this->getBoundary($request);
    
    // if ($boundary) {
    //     $parts = $this->parseMultipartFormData($content, $boundary);
        
    //     // Manually add parsed data to the request
    //     foreach ($parts as $name => $value) {
    //         $request->merge([$name => $value]);
    //     }
    // }

    // Find the primary offer
    $primaryOffer = Offer::findOrFail($id);

    // Process image upload
    $imagePath = $primaryOffer->image;
    if ($request->hasFile('images')) {
        // Delete existing image if it exists
        if ($primaryOffer->image) {
            Storage::disk('public')->delete($primaryOffer->image);
        }
        // Store new image
        $imagePath = $request->file('images')->store('offers', 'public');
    }

    // Identify language inputs dynamically
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

    // Process offers for each language
    foreach ($languages as $language) {
        // Skip if required fields are not filled
        if (!$request->filled([
            "{$language}_title",
            "{$language}_type",
            "{$language}_feature1",
            "{$language}_feature2",
            "{$language}_feature3"
        ])) {
            continue;
        }

        // Prepare offer data
        $offerData = [
            'language' => $language,
            'title' => $request->input("{$language}_title"),
            'type' => $request->input("{$language}_type"),
            'feature1' => $request->input("{$language}_feature1"),
            'feature2' => $request->input("{$language}_feature2"),
            'feature3' => $request->input("{$language}_feature3"),
            'price' => $request->input('price'),
            'discount_price' => $request->input('discount_price'),
            'image' => $imagePath,
            'secondary_id' => $language === 'en' ? 0 : $id
        ];

        // Find or create offer for this language
        $existingOffer = Offer::where('language', $language)
            ->where(function ($query) use ($id) {
                $query->where('id', $id)
                     ->orWhere('secondary_id', $id);
            })
            ->first();

        if ($existingOffer) {
            $existingOffer->update($offerData);
        } else {
            Offer::create($offerData);
        }
    }

    // Return JSON response for AJAX request
    return response()->json([
        'success' => true,
        'message' => 'Offer updated successfully',
        'redirect' => route('offers.index')
    ]);
}

public function destroy($id)
{
    $offer = Offer::findOrFail($id);

    if ($offer->delete()) {
        return redirect()->route('offers.index')->with('success', 'Item deleted successfully');
    } else {
        return redirect()->route('offers.index')->with('fail', 'Failed to delete the item');
    }
}

}
