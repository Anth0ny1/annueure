<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [];

        $users[] = array(
          'name' => 'Anthony',
          'city' => 'Beuzeville',
          'email' => 'anthony@mail.com',
          'password' => bcrypt('123456'),
        );

        $users[] = array(
          'name' => 'Loic',
          'city' => 'Evreux',
          'email' => 'loic@mail.com',
          'password' => bcrypt('123456'),
        );

        DB::table('users')->insert($users);

    }
}
