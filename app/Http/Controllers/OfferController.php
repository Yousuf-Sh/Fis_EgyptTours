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
        $offers = Offer::all();
        
        return view('Admin.offers.index',['offers'=>$offers]);
    }

    
    public function create()
    {
        $languages = Language::all();

        return view('Admin.offers.create',['languages'=>$languages]);
    }

    public function store(Request $request)
    {
        // dd($request);
        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('offers', 'public');
        }
        Offer::create([
            'language' => $request->input('language'), 
            'title' => $request->input("{$request->language}_title"),
            'type' => $request->input("{$request->language}_type"),
            'feature1' => $request->input("{$request->language}_feature1"),
            'feature2' => $request->input("{$request->language}_feature2"),
            'feature3' => $request->input("{$request->language}_feature3"),
            'price' => $request->input("price"),
            'discount_price' => $request->input("discount_price"),
            'image' => $imagePath ?? null,
        ]);
        return response()->json(['message' => 'Slider created successfully']);
    }

    public function edit($id)
    {
        $offer= Offer::findOrFail($id);
        return view('Admin.offers.edit',['offer'=>$offer]);
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
