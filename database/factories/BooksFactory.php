<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3,true),
            'category' => $this->faker->sentence(1, false),
            'author' => $this->faker->sentence(4, false),
            'release_date' => $this->faker->dateTimeThisYear('+3 month'),
            'publish_date' => $this->faker->dateTimeThisYear('+1 months'),
        ];
    }
}
