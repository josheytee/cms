<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'fname' => 'tobi agbeja',
            'phone' => '080454322',
            'username' => 'adapter',
            'dob' => date('Y-m-d'),
            'gender' => 'male',
            'password' => bcrypt('june24'),
            'email' => 'a@b.c'
        ]);

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'fname' => $faker->name(),
                'phone' => $faker->phoneNumber,
                'username' => $faker->userName,
                'dob' => $faker->date('Y-m-d'),
                'gender' =>$faker->randomElement(['male','female']),
                'password' => bcrypt('123456'),
                'email' => $faker->email
            ]);
        }
    }
}
