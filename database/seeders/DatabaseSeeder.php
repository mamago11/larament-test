<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        OrderStatus::factory()
            ->count(10)
            ->create();

        Order::factory()
            ->count(50)
            ->create();
    }
}
