<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        "employee_id",
        "activity",
        "time",
        "image"
    ];

    public function employeeID() {
        return $this->belongsTo(Employee::class);
    }
}
