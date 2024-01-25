<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Employee;
use App\Models\Attendance;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employee::factory(30)->create();
        
        foreach (Activity::$activity as $activityName) {
            // Check if the activity already exists in the database
            $existingActivity = Activity::where('activity', $activityName)->first();

            // If the activity doesn't exist, create a new record
            if (!$existingActivity) {
                Activity::create(['activity' => $activityName]);
            }
        }
    }
}
