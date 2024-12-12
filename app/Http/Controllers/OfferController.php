<?php

namespace App\Http\Controllers;

use App\Models\Offer;
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

    
    public function create()
    {
        $languages = Language::all();

        return view('Admin.offers.create',['languages'=>$languages]);
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
    // Validate each language's attributes
    $validLanguages = $languages->filter(function ($language) use ($request) {
        return $request->filled([
            "{$language}_title",
            "{$language}_type",
            "{$language}_feature1",
            "{$language}_feature2",
            "{$language}_feature3"
        ]);
    });

    $createdOffers = [];

    // Process image upload
    $imagePath = null;
    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('offers', 'public');
    }

    // Create offers for valid languages
    foreach ($validLanguages as $language) {
        $offer = Offer::create([
            'language' => $language,
            'title' => $request->input("{$language}_title"),
            'type' => $request->input("{$language}_type"),
            'feature1' => $request->input("{$language}_feature1"),
            'feature2' => $request->input("{$language}_feature2"),
            'feature3' => $request->input("{$language}_feature3"),
            'price' => $request->input("price"),
            'discount_price' => $request->input("discount_price"),
            'image' => $imagePath,
            // Default secondary_id to 0
            'secondary_id' => 0
        ]);

        $createdOffers[$language] = $offer;
    }
    
    // If 'en' exists, update secondary_id for other languages
    if (isset($createdOffers['en'])) {
        $enOffer = $createdOffers['en'];
        
        foreach ($createdOffers as $language => $offer) {
            
            if ($language !== 'en') {
                $offer->update(['secondary_id' => $enOffer->id]);
            }
        }
    }

    return response()->json([
        'message' => 'Offers created successfully', 
        'offers' => $createdOffers
    ]);
}

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
        dd($imagePath);
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
