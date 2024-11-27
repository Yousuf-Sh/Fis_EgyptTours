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
        $offer= Offer::where('id','=',$id)
        ->orWhere('secondary_id','=',$id)
        ->get();
        dd($offer);
        $languages = Language::all();
        return view('Admin.offers.edit',[
            'offer'=>$offer,
            'languages'=>$languages
        ]);
    }

   
    public function update(Request $request, $id)
{
    // Find the existing offer
    $offer = Offer::findOrFail($id);
    if ($request->hasFile('images')) {
        if ($offer->image) {
            Storage::disk('public')->delete($offer->image);
        }
        $imagePath = $request->file('images')->store('offers', 'public');
    } else {
        $imagePath = $offer->image;
    }
    $offer->update([
        'language' => $request->input('language'),
        'title' => $request->input("title"),
        'type' => $request->input("type"),
        'feature1' => $request->input("feature1"),
        'feature2' => $request->input("feature2"),
        'feature3' => $request->input("feature3"),
        'price' => $request->input("price"),
        'discount_price' => $request->input("discount_price"),
        'image' => $imagePath,
    ]);

    return redirect('offers.index')->with('status','updated item successfully');
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
