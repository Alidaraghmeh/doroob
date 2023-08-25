<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $newsArticles = News::all(); // Fetch all news articles from the database
        return view('admin.news.index', compact('newsArticles'));
    }
    

    public function create($section_id)
    {
        $section = Section::find($section_id);
        return view('admin.news.create', compact('section'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Add other validation rules for other columns if needed
            'name' => 'required',
            'description' => 'required',
        ]);
        $validatedData['section_id'] = $request->input('section_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName(); // Get the original file name
            $image->move('public/images', $imageName);     // Move the uploaded file to a directory
            $validatedData['image'] = $imageName;          // Save the complete image name in validated data
        }
    
        News::create($validatedData);
    
        return redirect()->route('admin.news.index')->with('success', 'News added successfully');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    
public function update(Request $request, $id)
{
    $data = $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $news = News::findOrFail($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName(); // Use the original file name
        $image->move('public/images', $imageName);
        $data['image'] =  $imageName;
    }

    // Update the 'image' column in the database
    $news->update(['image' => $data['image']]);

    return redirect()->route('admin.news.index')->with('success', 'News updated successfully');
}
    
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully');
    }
    public function sectionNews($section_id)
    {
        $section = Section::findOrFail($section_id);
        $newsArticles = $section->news;
    
        return view('admin.news.index', compact('newsArticles', 'section'));
    }
    

}
