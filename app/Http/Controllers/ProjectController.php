<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $projects = Project::with('photos')->latest()->get();

        return response()->json($projects);
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project): View
    {
        $project->load('photos');

        return view('project', [
            'project' => $project,
        ]);
    }
}
