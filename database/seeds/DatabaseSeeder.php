<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            // UserSeeder::class,
            // PostSeeder::class,
            // TypeSeeder::class,
            // OptionSeeder::class,
            V13TypeSeeder::class,
            V13OptionSeeder::class,
        ]);

        // factory(App\User::class, 50)->create()->each(function ($user) {
        //     $user->posts()->save(factory(App\Post::class)->make());
        // });

        factory(App\V13Order::class, 10)->create();
    }
}
