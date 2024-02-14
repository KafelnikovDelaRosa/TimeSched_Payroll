<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // TODO : Check for fixes for open details
    public function index()
    {
        $logs = Attendance::all()->reverse();

        $logData = [];

        foreach ($logs as $log) {
            $logAttributes = $log->getAttributes();
            $logData[] = $logAttributes;
        }

        $action_icons = [
            "icon: magnifying-glass | tip: Open Details | color:green | click:showActivityLog(`{employee_id}`)",
            "icon:trash | color:red | click:deleteUser({id})",
        ];

        return view(
            'admin.logs', ['logs' => $logData,
            'action_icons' => $action_icons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // TODO : Check for fixes for open details
    public function show($id)
    {
        $log = Attendance::findOrFail($id);

        if (!$log) {
            $this->error();
        }
        return response()->json($log);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // TODO : Integrate delete log function
    public function destroy(string $id)
    {
        //
        Attendance::where('id',$id)
        ->delete();
        return redirect('/admin/logs');
    }
}
