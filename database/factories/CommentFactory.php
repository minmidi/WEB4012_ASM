<?php

namespace Database\Factories;

use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class commentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(0,20),
            'product_id' => $this->faker->numberBetween(0,20),
            'content' => $this->faker->text(),
        ];
    }
}
