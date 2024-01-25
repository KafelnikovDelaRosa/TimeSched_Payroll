<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <form action="" class="flex justify-center mt-4">
        @csrf
        <div class="flex flex-col">
            <h1 class="text-2xl text-center font-semibold mb-4">Admin Login</h1>
            <input
                class="mb-4 rounded border text-center
            text-slate-700 border-slate-300 py-1.5 px-2.5 bg-slate-50 shadow-sm"
                type="text" placeholder="Username">
            <input
                class="mb-4 rounded border text-center text-slate-700 border-slate-300 py-1.5 px-2.5 bg-slate-50 shadow-sm"
                type="password" placeholder="Password">
            <button
                class="text-slate-50 rounded border border-slate-300 py-1.5 px-2.5 bg-blue-700 hover:bg-blue-600 shadow-sm"
                type=submit>Login</button>
        </div>
    </form>
</body>

</html>
