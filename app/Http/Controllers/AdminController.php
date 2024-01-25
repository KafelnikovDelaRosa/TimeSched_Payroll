<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logs() {
        return view("admin.logs", ['logs' => Attendance::all()]);
    }
}
