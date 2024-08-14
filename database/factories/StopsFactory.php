<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stops>
 */
class StopsFactory extends Factory
{
    protected $model = Stops::class;

   
     
    public function definition(): array
    {
        
            return [
                'stopname' => $this->faker->unique()->randomElement(['Pune', 'Mumbai','kolhapur','sangali']),
                'fee' => $this->faker->randomElement([200, 300, 500, 1000]),
                'time' => $this->faker->time(('H:i')),
                // Add more attributes as needed
            ];
            //
        
    }
}
