<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Benchmark;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
    }
}
