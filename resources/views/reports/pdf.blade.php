<!DOCTYPE html>
<html>
<head>
    <title>Event Report</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Event Report</h1>
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Location</th>
                <th>Date</th>
                <th>Attendees</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->tickets->sum('quantity') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
