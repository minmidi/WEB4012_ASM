<?php

namespace Database\Factories;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName('male'|'female'),
            'last_name' => $this->faker->lastName,
            'images' => $this->faker->imageUrl($width = 640, $height = 480),
            'gender' => $this->faker->numberBetween(0,2),
            'birthday' => $this->faker->dateTime(),
            'address' => $this->faker->address,
            'birthday' => $this->faker->dateTime(),
            'user_id' => $this->faker->numberBetween(0,20),
        ];
    }
}
