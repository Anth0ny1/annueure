<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Loic',
          'city' => 'Evreux',
          'email' => 'loic@mail.com',
          'role' => 'societe',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'admin',
          'city' => 'Paris',
          'email' => 'admin@mail.com',
          'role' => 'admin',
          'password' => bcrypt('admin'),
          'created_at' => Carbon::now()
        );

        DB::table('users')->insert($users);

    }
}
