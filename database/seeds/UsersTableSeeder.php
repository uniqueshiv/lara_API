<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);

        // $faker = Faker\Factory::create();

        // $limit = 10;
    
        // for ($i = 0; $i < $limit; $i++) {
        //    echo  $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
        // }

        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
            ]);
        }
    }
}
