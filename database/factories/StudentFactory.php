<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

       
    public function definition()
    {
        return [
            //'studentname' => $this->faker->name,
            'studentname' => $this->faker->name,
            'contact' => $this->faker->phoneNumber,
        ];
    }
    
}
