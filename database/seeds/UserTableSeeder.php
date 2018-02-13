<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        $users = [];

        $users[] = array(
          'name' => 'Anthony',
          'lastname' => 'Thiriot',
          'city' => 'Beuzeville',
          'email' => 'anthony@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Loic',
          'lastname' => 'Gourdeau',
          'city' => 'Evreux',
          'email' => 'loic@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'admin',
          'lastname' => 'admin',
          'city' => 'Paris',
          'email' => 'admin@mail.com',
          'role' => 'admin',
          'password' => bcrypt('admin'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Quidel',
          'lastname' => 'antoine',
          'city' => 'Pont audemer',
          'email' => 'quidelantoine@gmail.com',
          'role' => 'admin',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        DB::table('users')->insert($users);

    }
}
