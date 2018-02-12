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
<<<<<<< HEAD:database/seeds/UserTableSeeder.php
          'lastname' => 'Thiriot',
=======
          'lastname' => 'nom',
>>>>>>> 6d4d133145eb03235b88fbf4b83bb4ed6283b81f:database/seeds/UsersTableSeeder.php
          'city' => 'Beuzeville',
          'email' => 'anthony@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Loic',
<<<<<<< HEAD:database/seeds/UserTableSeeder.php
          'lastname' => 'Gourdeau',
=======
          'lastname' => 'nom',
>>>>>>> 6d4d133145eb03235b88fbf4b83bb4ed6283b81f:database/seeds/UsersTableSeeder.php
          'city' => 'Evreux',
          'email' => 'loic@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'admin',
<<<<<<< HEAD:database/seeds/UserTableSeeder.php
          'lastname' => 'admin',
=======
          'lastname' => 'nom',
>>>>>>> 6d4d133145eb03235b88fbf4b83bb4ed6283b81f:database/seeds/UsersTableSeeder.php
          'city' => 'Paris',
          'email' => 'admin@mail.com',
          'role' => 'admin',
          'password' => bcrypt('admin'),
          'created_at' => Carbon::now()
        );

        DB::table('users')->insert($users);

    }
}
