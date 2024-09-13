<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AtletSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('atlets')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 40),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
