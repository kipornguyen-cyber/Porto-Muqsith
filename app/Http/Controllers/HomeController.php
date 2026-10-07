<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the public homepage/portfolio.
     */
    public function index(): View
    {
        $skills = Skill::where('is_active', true)->get()->groupBy('category');
        $projects = Project::latest()->get();
        $categories = Project::pluck('category')->unique()->filter()->values();

        return view('welcome', compact('skills', 'projects', 'categories'));
    }
}
