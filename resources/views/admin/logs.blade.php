<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Employee Logs</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">

</body>
<ul>
    @foreach ($logs as $log)
        <li>{{ $log->employee_id }}</li>
    @endforeach
</ul>

</html>
