<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalProjects = Project::count();
        $totalSkills = Skill::count();
        $unreadMessages = Message::where('is_read', false)->count();
        $latestMessages = Message::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalProjects', 'totalSkills', 'unreadMessages', 'latestMessages'));
    }
}
