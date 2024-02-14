<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Employee Logs</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</head>

<body>
    <x-bladewind::table searchable="true" hover_effect="true" divider="thin" search_placeholder="Search by id or name"
        exclude_columns="image" :action_icons="$action_icons" :data="$logs" compact="true" />

    <x-bladewind.modal type="info" name="show-activity-log" title="">
        <div class="mb-6">Employee ID:</div>
        <div class="mb-6">Employee Name:</div>
        <div class="mb-6" id="activity"></div>
        <div class="mb-6">Time:</div>
    </x-bladewind.modal>

    <script>
        showActivityLog = (employee_id) => {
            showModal('show-activity-log');
            domEl('.bw-show-activity-log .modal-title').innerText = `Activity ID: ${employee_id}`;
            domEl('.bw-show-activity-log #activity').innerText = `Activity: ${logs}`;
        }
    </script>

</body>

</html>
