<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::factory()
            ->count(5)
            ->hasUsers(5, ['filament_admin' => true])
            ->create();
    }
}
