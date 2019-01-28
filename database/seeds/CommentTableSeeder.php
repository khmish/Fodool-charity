<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
            DB::table('comments')
                ->insert([
                    'user_id' =>$faker->numberBetween($min = 1, $max = 21),
                    'blog_id' =>$faker->numberBetween($min = 1, $max = 21),
                    'body' => $faker->paragraph,
                    
                    'state' => $faker->numberBetween($min = 0, $max = 4),
                    'created_at'=>now(),
                    'updated_at'=>now(),
                   
                ]);
        endfor;
    }
}
