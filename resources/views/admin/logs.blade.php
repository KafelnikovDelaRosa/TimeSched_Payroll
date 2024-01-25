<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Employee Logs</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <table class="">
        <thead>
            <th>Employee ID</th>
            <th>Activity</th>
            <th>Time</th>
            <th>Image</th>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->employee_id }}</td>
                    <td>{{ $log->activity }}</td>
                    <td>{{ $log->time }}</td>
                    <td><img class="w-40" src="{{ asset('storage/' . $log->image) }}" alt="employee_image_log"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
