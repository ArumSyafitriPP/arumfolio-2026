<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Profile;
use App\Models\ContactInfo;

class ProjectController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->get();
        $profile = Profile::first();
        $contact = ContactInfo::first();
        
        return view('home', compact(
            'projects',
            'profile',
            'contact'
        ));
    }

    public function detail($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('project-detail', compact('project'));
    }
}