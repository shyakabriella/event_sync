<?php

namespace App\Exports;

use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Event::all();
    }

    public function headings(): array
    {
        return [
            'ID', 'Name', 'Date', 'Location', 'Attendee Number'
        ];
    }
}
