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

    <x-bladewind::modal name="delete-user" type="error" title="Confirm Log Deletion">
        Are you really sure you want to delete log <b class="title"></b>?
        This action cannot be reversed.
    </x-bladewind::modal>

    <script>
        // TODO : display log and employee details (Employee ID, Employee Name, Employee Title, Time, Activity, Log Image)
        showActivityLog = (employee_id) => {
            showModal('show-activity-log');
            domEl('.bw-show-activity-log .modal-title').innerText = `Activity ID: ${employee_id}`;
            domEl('.bw-show-activity-log #activity').innerText = `Activity: ${logs}`;
        }

        // Delete user 
        deleteUser = (employee_id) => {
            showModal('delete-user');
            domEl('.bw-delete-user .title').innerText = `${employee_id}`;
        }
    </script>

</body>

</html>
