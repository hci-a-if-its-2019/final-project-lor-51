<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create('id_ID');
		for ($i=0; $i < 4; $i++) {
            $user = Comment::create([
                'parent'  => 0,
                'name' => $faker->name,
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ]);
        }
    }
}
