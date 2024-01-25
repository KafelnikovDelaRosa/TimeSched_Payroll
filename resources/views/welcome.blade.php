<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time Scheduler</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="text-center bg-slate-100">
    <form method="POST" action="{{ route('webcam.capture') }}" onsubmit="take_snapshot()" id="captureForm"
        class="flex flex-col">
        @csrf
        <div class="flex justify-center w-full">
            <div>
                <h1 class="text-2xl font-semibold mt-4">Time Scheduler</h1>
                <div id="my_camera"></div>
                <input type="hidden" name="image" class="image-tag">
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <div class="flex flex-col">
                <select name="employee" id="employee"
                    class="mb-4 rounded border text-center text-slate-700 border-slate-300 py-1.5 px-2.5 bg-slate-50 shadow-sm">
                    <option value="default-employee">Your Employee ID</option>
                    @foreach ($names as $name)
                        <option value="{{ $name->employee_id }}">{{ $name->employee_id }}</option>
                    @endforeach
                </select>
                <select name="activity" id="activity"
                    class="mb-4 rounded border text-center text-slate-700 border-slate-300 py-1.5 px-2.5 bg-slate-50 shadow-sm">
                    <option value="default-activity">Choose Activity</option>
                    @foreach ($activities as $activity)
                        <option value="{{ $activity->activity }}">{{ $activity->activity }}</option>
                    @endforeach
                </select>
                <button
                    class="text-slate-50 rounded border border-slate-300 py-1.5 px-2.5 bg-blue-700 hover:bg-blue-600 shadow-sm"
                    type=submit>
                    Capture
                </button>
            </div>
        </div>
    </form>

    <script language="JavaScript">
        Webcam.set({
            width: 490,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90,
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
            });
        }
    </script>
</body>

</html>
