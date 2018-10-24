<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'user_id'=>rand(1,100),
                'title' => $faker->title,
                'description' => $faker->text,
                'slug' => $faker->slug
            ]);
        }
    }
}
