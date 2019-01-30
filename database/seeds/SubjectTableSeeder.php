<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('Subjects')
                ->insert([
                    'tile' => $faker->title,
                    'description' => $faker->sentence,
                    'picture' =>'something',
                    'body' => $faker->paragraph,
                    'blog_id' => $faker->numberBetween($min = 1, $max = 21),
                    'user_id' => $faker->numberBetween($min = 1, $max = 21),
                    'count_view' => $faker->numberBetween($min = 0, $max = 1000),
                    'is_published' => $faker->numberBetween($min = 0, $max = 1),
                    'published_date' => $faker->date,
                    'state' => $faker->numberBetween($min = 0, $max = 4),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
        endfor;
    }
}
