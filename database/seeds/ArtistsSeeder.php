<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('artists')->insert([
                'firstName' => $faker->firstName(),
                'lastName' => $faker->lastName,
                'role' => $faker->word,
                'motto' => $faker->sentence,
                'facebook_link' => $faker->url,
                'instagram_link' => $faker->url,
                'twitter_link' => $faker->url,

            ]);
        }
    }
}
