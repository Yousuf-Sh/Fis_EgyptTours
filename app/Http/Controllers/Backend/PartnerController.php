<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
class PartnerController extends Controller
{
    //
    public function index(){
		$partners=Partner::all();
       //    $Question_description= Question_description::all();
		return view('Admin.partners.index',compact('partners'));
	
}

public function create(){
	return view('Admin.partners.add');
	
}


public function update(Request $request)
{
    $id=$request->partner_id;
    $partner = Partner::findOrFail($id);
    
    $imagePath = null;
    if ($request->hasFile('image1')) {
        $image = $request->file('image1');
        if ($image->isValid()) {
            $filename = time() . '_' . $image->getClientOriginalName();
            // Move the file to the public/Frontend/images directory
            $image->move(public_path('Frontend/images/flags/'), $filename);
            // Define the relative path to be stored
            $imagePath = 'Frontend/images/flags/' . $filename;
        } else {
            return back()->withErrors(['image1' => 'Uploaded file is not valid.']);
        }
    } else {
        $imagePath = $partner->image;
    }
    
    $name = $request->name ?? $partner->name;
    $link = $request->link ?? $partner->link;
    
    
    $Data=[
        'name'=>$name,
        'link'=>$link,
        'image'=>$imagePath
    ];
    
    $operation = $partner->update($Data);
    
    if ($operation) {
        
        return redirect()->route('partners.index')->with('success', 'Partner Updated Successfully');
    } else {
        return redirect()->back()->with('failed', 'An error occurred while trying to update');
    }
}

public function store(Request $request)
{
        $imagePath = null; 
        
        if ($request->hasFile('image1')) {
            
            $image = $request->file('image1');
        
            
            if ($image->isValid()) {
                $filename = time() . '_' . $image->getClientOriginalName();
        
                // Move the file to the public/Frontend/images directory
                $image->move(public_path('Frontend/images/flags/'), $filename);
        
                // Define the relative path to be stored
                $imagePath = 'Frontend/images/flags/' . $filename;
                
            } else {
                return back()->withErrors(['image1' => 'Uploaded file is not valid.']);
            }
        } else {
            return back()->withErrors(['image1' => 'No file found.']);
        }
        
        // dd($imagePath);
        $name = $request->name;
        $link = $request->link??  '';
        $Data=[
            'name'=>$name,
            'link'=>$link,
            'image'=>$imagePath
        ];
        $operation = Partner::create($Data);
        if($operation){
            return redirect()->route('partners.index')->with('success','Language Added Successfully');
        }else{
            return redirect()->back()->with('failed','An error occured while trying to save');
        }
        
}


	public function edit($id)
	{
        
		$partner = Partner::findOrFail($id);

        return view('Admin.partners.edit',compact('partner'));

    }
	public function delete($id)
	{
        $partner = Partner::where('id', '=', $id)->first();
        if ($partner) {
            $partner->delete();
        }
    
        
        return redirect()->back()->with('success','Partner Deleted Successfully');

	}
}