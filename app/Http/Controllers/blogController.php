<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::orderBy('created_at', 'desc')->get();
        return view('creats.create', compact('data'));
    }

    public function recent()
    {
        $data = Blog::orderBy('created_at', 'desc')->get();
        $work = Project::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('data', 'work'));
    }

    public function blog()
    {
        $data = Blog::orderBy('created_at', 'desc')->get();
        return view('blogs.blog', compact('data'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image_url'=>'required',
            'date'=>'required',
            'middle_title'=>'required',
            'stars'=>'required',
            'description'=>'required'
        ]);

        $data = new Blog();
        $data->title = $request->input('title');
        $data->image_url = $request->input('image_url');
        $data->date = $request->input('date');
        $data->middle_title = $request->input('middle_title');
        $data->stars = $request->input('stars');
        $data->description = $request->input('description');
        if ($data->save()){
            return redirect('/blog/create');
        }else{
            return redirect('/blog/create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $data = Blog::where('id', $id)->first();
        return view('creats.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $resource = $request->validate([
            'title' => 'required',
            'image_url' => 'required',
            'date' => 'required',
            'middle_title' => 'required',
            'stars' => 'required',
            'description' => 'required'
        ]);
    
        $blog = Blog::where('id', $id)->firstOrFail(); // Use firstOrFail to throw a 404 error if not found
        $blog->update($resource);
        return redirect('/blog/create');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dest = Blog::destroy($id);
        if ($dest){
            return redirect("/blog/create");
        }
    }
}
