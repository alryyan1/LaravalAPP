<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Patient;
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
    public function definition(): array
    {
        $doctor = Doctor::factory()->create();
        

        return [
            'name' => $this->faker->name(),
            'doctor_id' => $doctor->id,
            'age' => 1,
            'address' => 'الثوره العاره العاشره',
            'phone' => '0991961111',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
