<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $totalOrderAmountDue = rand(200, 200000);

        return [
            'amount_due' => $totalOrderAmountDue,
            'amount_paid' => $this->faker->boolean() ? $totalOrderAmountDue : 0,
            'order_status_id' => OrderStatus::query()->inRandomOrder()->first()->id,
        ];
    }
}
