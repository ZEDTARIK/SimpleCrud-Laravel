<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // https://github.com/fzaninotto/Faker
        // CMD for drop and create again migration and make some exemple
        // php artisan migrate:fresh --seed

        $name = $this->faker->lastName();
        return [
            'FirstName' => $this->faker->firstName,
            'LastName' => $name,
            'Email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address,
            'ParrentFullName' => $name . ' ' . $this->faker->firstName()
        ];
    }
}
