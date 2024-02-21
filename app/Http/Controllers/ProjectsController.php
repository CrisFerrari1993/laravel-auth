<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project :: all();
        return view('dashboard', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $newProject = new Project();
     
        $newProject -> title = $data['title'];
        $newProject -> framework = $data['framework'];
        $newProject -> description = $data['description'];
        $newProject -> IMG_path = $data['IMG_path'];

        $newProject -> save();

        return redirect() -> route('logged.show', $newProject -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project :: find($id);
        return view('logged.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projects = Project :: find($id);
        $data = $request -> all();


        $projects -> title = $data['title'];
        $projects -> framework = $data['framework'];
        $projects -> description = $data['description'];
        $projects -> IMG_path = $data['IMG_path'];
        
        $projects -> save();

        return redirect() ->route('logged.show', $projects -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project :: find($id);
        $projects -> delete();
        return redirect() -> route('dashboard');
    }
}
