<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Language;

use DB;
use App\Models\Question_description;
class LanguageController extends Controller
{
    //
    public function index(){
		$languages=Language::all();
       //    $Question_description= Question_description::all();
		return view('Admin.Languages.index',compact('languages'));
	
}

public function create(){
    $languages=Language::all();
	return view('Admin.Languages.add',compact('languages'));
	
}


public function update(Request $request, $id)
{
    // dd($request);
    $language = Language::findOrFail($id);
    
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
        $imagePath = $language->flag;
    }
    
    $name = $request->name;
    
    // Use existing slug if name hasn't changed
    if ($name === $language->name) {
        $slug = $language->slug;
    } else {
        // Generate a unique slug
        $slug = strtolower(substr($name, 0, 2));
        $originalSlug = $slug;
        $counter = 1;
        
        // Check for existing slugs and make it unique
        while (Language::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . $counter;
            $counter++;
        }
    }
    
    $langData = [
        'name' => $name,
        'slug' => $slug,
        'flag' => $imagePath
    ];
    
    $operation = $language->update($langData);
    
    if ($operation) {
        return redirect()->route('languages.index')->with('success', 'Language Updated Successfully');
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
        $slug = strtolower(substr($name, 0, 2));

        if (Language::where('slug', $slug)->exists()) {
                    $slug = strtolower(substr($name, 0, 3));

        }
        $langData=[
            'name'=>$name,
            'slug'=>$slug,
            'flag'=>$imagePath
        ];
        $operation = Language::create($langData);
        if($operation){
            return redirect()->route('languages.index')->with('success','Language Added Successfully');
        }else{
            return redirect()->back()->with('failed','An error occured while trying to save');
        }
        
}


	public function edit($id)
	{
        
		$language = Language::findOrFail($id);

        return view('Admin.Languages.edit',compact('language',));

    }
	public function delete($id)
	{
        $lang = Language::where('id', '=', $id)->first();
        if ($lang) {
            $lang->delete();
        }
    
        
        return redirect()->back()->with('success','Language Deleted Successfully');

	}
}