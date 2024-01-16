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
        Attendance::factory(300)->create();
        Activity::factory()->create();
    }
}
