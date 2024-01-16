<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public static array $activity = [
        'Clock In',
        'Clock Out',
        'Lunch',
        '15min Break',
        '30min Break',
    ];
}
