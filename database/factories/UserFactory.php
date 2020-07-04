<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Customer;
use App\Order;
use App\LocationOption;
use App\OrderOption;
use App\V13Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'dept' => $faker->unique()->company,
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    return [
        // 'customer_id' => rand(1,5),
        // 'numOfOriginals' => $faker->randomDigitNotNull,
        // 'numOfCopies' => $faker->randomDigitNotNull,
        'customer_name' => $faker->name,
        'number_of_copies' => $faker->randomDigitNotNull,
        'payment' => $faker->word,
    ];
});

$factory->define(V13Order::class, function (Faker $faker) {
    return [
        // 'customer_id' => rand(1,5),
        // 'numOfOriginals' => $faker->randomDigitNotNull,
        // 'numOfCopies' => $faker->randomDigitNotNull,
        'customer_name' => $faker->name,
        'number_of_copies' => $faker->randomDigitNotNull,
        'payment' => $faker->word,
    ];
});

$factory->define(LocationOption::class, function (Faker $faker) {
    return [
        'location_id' => rand(1,5),
        'option_id' => rand(1,8),
    ];
});

$factory->define(OrderOption::class, function (Faker $faker) {
    return [
        'order_id' => rand(1,5),
        'option_id' => rand(1,8),
    ];
});
