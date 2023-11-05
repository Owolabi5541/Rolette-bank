<?php

namespace Database\Factories;

// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
//  */
// class UserFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             "firstname" => $this->faker->name(),
//             "lastname" => $this->faker->name(),
//             "userID" => $this->faker->name(),
//             "address" => $this->faker->address(),
//             "phone" => $this->faker->e164PhoneNumber(),
//             "email" => $this->faker->unique()->safeEmail(),
//             // 'email_verified_at' => now(),
//             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//             'remember_token' => Str::random(10),
//         ];
//     }

//     // /**
//     //  * Indicate that the model's email address should be unverified.
//     //  */
//     // public function unverified(): static
//     // {
//     //     return $this->state(fn (array $attributes) => [
//     //         'email_verified_at' => null,
//     //     ]);
//     // }

//     // public function definition() {
//     //     $username = $this->faker->unique()->userName();
//     //     return [
//     //         "firstname" => $this->faker->name(),
//     //         "lastname" => $this->faker->name(),
//     //         "userID" => $this->faker->name(),
//     //         "address" => $this->faker->address(),
//     //         "phone" => $this->faker->e164PhoneNumber(),
//     //         "email" => $this->faker->unique()->safeEmail(),
//     //         "password" => Hash::make($username),
//     //     ];
//     // }
// }

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'userID' => $faker->unique()->bothify('??????##'),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'), // You can use Hash::make() for more security
        'is_admin' => $faker->boolean(10), // 10% chance of being admin
        'is_active' => true, // All users are active in this case
        'remember_token' => Str::random(10),
    ];
});