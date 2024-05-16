<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; 
use App\Models\Event;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EventsExport;
use PDF;


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

    public function downloadPDF()
    {
        $events = Event::with('artists', 'tickets')->get();
        $pdf = PDF::loadView('reports.pdf', compact('events'));
        return $pdf->download('event_report.pdf');
    }

    public function downloadExcel()
    {
        return Excel::download(new EventsExport, 'event_report.xlsx');
    }

    

    
}

