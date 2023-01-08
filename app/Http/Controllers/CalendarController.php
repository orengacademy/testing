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
                'projectitle' => $booking->title,
                'startdate' => $booking->start_date,
                'enddate' => $booking->end_date,
            ]

        }
        return view('calendar.index');

    }
}
