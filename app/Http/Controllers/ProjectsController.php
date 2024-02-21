<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }

    // public function create()
    // {

    // }

    // public function store(Request $request)
    // {

    // }

    // public function show($id)
    // {
    // }

    // public function edit($id)
    // {
    // }

    // public function update(Request $request, $id)
    // {
    // }

    // public function destroy($id)
    // {
    // }

}
