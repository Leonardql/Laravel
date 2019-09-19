<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,3) as $index) {
            DB::table('tickets')->insert([
                'title' => $faker->word,
                'price' => $faker->randomNumber(2),
                'x_entry' => $faker->randomNumber(2),
                'persons_allowed' => $faker->randomNumber(2),
                'hour_limitation' => $faker->randomNumber(2),
            ]);
        }
    }
}
