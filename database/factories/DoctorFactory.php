<?php

namespace Database\Factories;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $specialist = Specialist::find(1);
        return [
            'name' => $this->faker->name,
            'phone' => '0991961111' ,
            'specialist_id' => $specialist->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
