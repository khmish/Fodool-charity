<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=20; $i++):
            DB::table('blogs')
                ->insert([
                    'name' => $faker->name,
                    'description' => $faker->sentence,
                    'type' =>'something',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                    'state'=> $faker->numberBetween($min = 0, $max = 4)
                ]);
        endfor;
    }
}
