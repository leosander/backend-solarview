<?php

namespace Database\Factories;

use App\Models\UsersLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersLogFactory extends Factory
{

    protected $model = UsersLog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(77, 101),
            'login_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}