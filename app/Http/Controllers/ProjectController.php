<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function show($id)
    {
        return view("projects", ["proyecto" => $id]);
    }
}
