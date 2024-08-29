<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_listings')->insert([
            [
                "title" => "Frontend Developer",
                "salary" => "10000",
                "description" => "Responsible for UI development."
            ],
            [
                "title" => "Backend Developer",
                "salary" => "20000",
                "description" => "Responsible for server-side development."
            ],
            [
                "title" => "Fullstack Developer",
                "salary" => "30000",
                "description" => "Responsible for both UI and server-side development."
            ],
        ]);
    }
}
