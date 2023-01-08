<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
        $projects = Project::all();
        foreach($projects as $project)
        {
            $events[] = [
                'title' => $project->titleproject,
                'start' => $project->startdate,
                'end' => $project->enddate,
            ];

        }

        return view('calendar.index',['events'=>$events]);

    }
}
