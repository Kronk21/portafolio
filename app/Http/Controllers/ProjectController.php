<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view("home", ["projects" => Project::all()]);
    }

    public function show($id)
    {
        return view("projects", ["project" => Project::find($id)]);
    }
}
