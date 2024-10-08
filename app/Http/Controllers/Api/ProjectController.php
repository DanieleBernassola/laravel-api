<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::with('type', 'technologies')->get();

        $projects = Project::with('type')->paginate(12);
        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }

    // public function index()
    // {
    //     $projects = Project::with('type', 'technologies')->get();
    //     return response()->json($projects);
    // }

    // public function show(Project $project)
    // {
    //     $project->load('type', 'technologies');
    //     return response()->json($project);
    // }

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->with('type', 'technologies')->first();

        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => null,
            ], 404);
        }
    }
}
