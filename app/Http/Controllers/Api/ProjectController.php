<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return response()->json([
            'result' => $projects,
            'success' => true
        ]);
    }

    public function show(string $slug) {
        $project = Project::with('type', 'technologies',)->where('slug', $slug)->first();

        if($project) {
            return response()->json([
                'result' => $project,
                'succes' => true
            ]);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'No projects'
            ]);
        }
    }
}
