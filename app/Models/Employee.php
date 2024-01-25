<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class Employee extends Model
{
    use HasFactory;

    public static array $title = [
        'President',
        'Vice President',
        'Secretary',
        'Assistant Secretary',
        'Engineer',
        'Construction Worker',
        'Painter',
        'Roofer'
    ];

    public function employeeAttendance() {
        return $this->hasMany(Attendance::class);
    }
}
