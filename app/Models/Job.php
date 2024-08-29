<?php

namespace App\Models;

use Illuminate\Support\Arr; // Импортируем Arr

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Frontend Developer",
                "salary" => "10000",
            ],
            [
                "id" => 2,
                "title" => "Backend Developer",
                "salary" => "20000",
            ],
            [
                "id" => 3,
                "title" => "Fullstack Developer",
                "salary" => "30000",
            ],
        ];
    }

    public static function find($id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404, 'Job not found');
        }

        return $job;
    }
}
