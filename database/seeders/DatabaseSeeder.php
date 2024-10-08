<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        \App\Models\User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
        ]);

        $this->call(JobListingsSeeder::class);
    }
}
