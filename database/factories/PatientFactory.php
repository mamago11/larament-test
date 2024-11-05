<?php

    namespace Database\Factories;

    use App\Models\Owner;
    use App\PatientTypeEnum;
    use Arr;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
     */
    class PatientFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition():array
        {
            return [
                'date_of_birth' => $this->faker->date(),
                'name' => $this->faker->name(),
                'owner_id' => Owner::inRandomOrder()->first()->id,
                'type' => Arr::random(PatientTypeEnum::getValues()),
            ];
        }
    }
