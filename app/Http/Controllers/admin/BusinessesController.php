<?php

namespace App\Http\Controllers\admin;
use App\Models\Business;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class BusinessesController extends Controller
{
   
    public function index()
    {
        $businesses = Business::all();
        return view('admin.businesses.index', compact('businesses'));
    }

    public function create($section_id)
{
    $section = Section::find($section_id);
    // dd($section);
    return view('admin.businesses.create', compact('section'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $validatedData['section_id'] = $request->input('section_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName(); // Get the original file name
            $image->move('public/images', $imageName);     // Move the uploaded file to a directory
            $validatedData['image'] = $imageName;          // Save the complete image name in validated data
        }
        

        Business::create($validatedData);

        return redirect()->route('admin.businesses.index')->with('success', 'Business added successfully');
    }

    public function edit($id)
    {
        $business = Business::findOrFail($id);
        return view('admin.businesses.edit', compact('business'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $business = Business::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('public/images', $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        $business->update($data);

        return redirect()->route('admin.businesses.index')->with('success', 'Business updated successfully');
    }

    public function destroy($id)
    {
        $business = Business::findOrFail($id);
        $business->delete();

        return redirect()->route('admin.businesses.index')->with('success', 'Business deleted successfully');
    }
    public function sectionBusinesses($section_id)
{
    $section = Section::findOrFail($section_id);
    $businesses = $section->businesses;

    return view('admin.businesses.index', compact('businesses', 'section'));
}

}
