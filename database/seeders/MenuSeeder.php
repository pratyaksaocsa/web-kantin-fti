<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create('ID_id');

        for($i = 0; $i < 20; $i++){
            DB::table('menus')->insert([
                'name' => $faker->name(),
                'price' => $faker->numberBetween(10000, 20000),
                'stock' => $faker->randomDigitNotNull()
            ]);
        }
    }
}
