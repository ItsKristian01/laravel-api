<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return response()->json([
            'type1' => "Backend",
            'type2' => "Full Stack",
            'type3' => "Portofolio website",
            'type4' => "Ecommerce"
        ]);
    }
}
