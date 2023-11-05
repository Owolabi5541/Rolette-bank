<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(2, 100),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->sentence,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

// use App\Models\Transaction;
// use Faker\Generator as Faker;

// $factory->define(Transaction::class, function (Faker $faker) {
//     return [
//         'user_id' => $faker->numberBetween(1, 100),
//         'amount' => $faker->randomFloat(2, 10, 1000),
//         'description' => $faker->sentence,
//         'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
//         'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
//     ];
// });