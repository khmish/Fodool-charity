<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for($i=0; $i<=20; $i++):
            DB::table('users')
                ->insert([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'email_verified_at' =>now(),
                    'password' =>$faker->password,
                    'remember_token' =>$faker->password,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                    'state'=> $faker->numberBetween($min = 0, $max = 4)
                ]);
        endfor;
    }
}
