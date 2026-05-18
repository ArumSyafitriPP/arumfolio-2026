<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->get();

        return view('home', compact('projects'));
    }

    public function detail($slug)
    {
        $project = Project::where('slug', $slug)
            ->firstOrFail();

        return view('project-detail', compact('project'));
    }
}
