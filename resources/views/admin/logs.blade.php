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
        columns="image, created_at, updated_at" :action_icons="$action_icons" :data="$logs" compact="true" />

    <x-bladewind.modal type="info" name="show-activity-log" title="">
        <div class="mb-4 employee_id" id="employee-id">Employee ID:</div>
        <div class="mb-4 activity" id="activity">Activity:</div>
        <div class="mb-4 time">Time:</div>
        <img class="mb-4 employee-image" src="">
    </x-bladewind.modal>

    <x-bladewind::modal name="delete-user" type="error" title="Confirm Log Deletion">
        Are you really sure you want to delete log <b class="title"></b>?
        This action cannot be reversed.
    </x-bladewind::modal>

    <script>
        // TODO : Add Employee Name
        showActivityLog = (id) => {
            fetch(`/admin/logs/${id}`)
                .then(response => response.json())
                .then(data => {
                    showModal('show-activity-log');
                    domEl('.bw-show-activity-log .modal-title').innerText = `Activity Log #${id}`;
                    domEl('.employee_id').innerText = `Employee ID: ${data.employee_id}`;
                    domEl('.activity').innerText = `Activity: ${data.activity}`;
                    const formattedTime = new Date(data.time).toLocaleString('en-US', {
                        month: 'long',
                        day: 'numeric',
                        year: 'numeric',
                        hour: 'numeric',
                        minute: 'numeric',
                        second: 'numeric',
                        hour12: true
                    });
                    domEl('.time').innerText = `Time: ${formattedTime}`;

                    domEl('.employee-image').src = `/storage/${data.image}`;
                })
                .catch(error => console.error('Error:', error));
        }

        // Delete user 
        deleteUser = (employee_id) => {
            showModal('delete-user');
            domEl('.bw-delete-user .title').innerText = `${employee_id}`;
        }

        function handleUserDelete(employee_id)
    </script>

</body>

</html>
