<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; 
use App\Models\Event;


class ReportController extends Controller
{
    public function index()
    {
        $events = Event::all();
        \Log::debug('Events variable:', compact('events'));
        return view('reports.index', compact('events'));
        $reports = Report::all(); 

        return view('reports.index', [
            'reports' => $reports
        ]);
    }
}

