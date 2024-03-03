<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::orderBy('created_at', 'desc')->get();
        return view("works.work", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Project::orderBy('created_at', 'desc')->get();
        return view("projects.project", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "short_title"=>"required",
            "image"=>"required",
            "date"=>"required",
            "url"=>"required",
            "description"=>"required"
        ]);

        $data = new Project();
        $data->title = $request->input("title");
        $data->short_title = $request->input("short_title");
        $data->image = $request->input("image");
        $data->date = $request->input("date");
        $data->url = $request->input("url");
        $data->description = $request->input("description");
        if ($data->save()){
            return redirect()->route("project");
        }else{
            return redirect()->route("project");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Project::where('id', $id)->first();
        return view('projects.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $resource = $request->validate([
            "title"=>"required",
            "short_title"=>"required",
            "image"=>"required",
            "date"=>"required",
            "url"=>"required",
            "description"=>"required"
        ]);

        $blog = Project::where('id', $id)->firstOrFail(); // Use firstOrFail to throw a 404 error if not found
        $blog->update($resource);
        return redirect('/project/create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dest = Project::destroy($id);
        if ($dest){
            return redirect("/project/create");
        }
    }
}
