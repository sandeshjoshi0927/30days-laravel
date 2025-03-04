<?php

namespace App\Models;
use Illuminate\Support\Arr;
use PDO;

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Teacher',
                'salary' => '$20,000'
            ],
            [
                'id' => 2,
                'title' => 'Player',
                'salary' => '$30,000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$60,000'
            ]
        ];
    }

    public static function find(int $id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job) {
            abort(404);
        }

        return $job;
    }
}