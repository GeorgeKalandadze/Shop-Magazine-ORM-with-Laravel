<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition( ): array
    {
        return [
            'user_id' => User::all()->random(1)->first()->id,
            'token' => Str::random(10),
            'total_price'  => number_format(mt_rand(1000, 100000) / 100, 2, '.', ''),
            'status' =>  $this->faker->randomElement(['active', 'inactive'])
        ];
    }
}
