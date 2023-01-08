<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $project = Project::count();
        $staff = User::count();
        return view('home.index', compact('project', 'staff'));
    }
}
