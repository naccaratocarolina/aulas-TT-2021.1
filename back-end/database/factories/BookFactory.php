<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'author' => $this->faker->name,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 2, $max = 3)
        ];
    }
}
