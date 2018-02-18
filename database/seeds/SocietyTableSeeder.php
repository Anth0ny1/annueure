<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocietyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
      $society = [];
      $date = Carbon::now();

      $society[] = array(
        'user_id'        => 1,
        'name_society'       => 'nom de la societe',
        'gerant'       => 'gerant',
        'adress'    => 'route des champs ',
        'city'        => 'Paris',
        'zip_code'        => '75000',
        'phone'        => '0232324324',
        'site_web'        => 'societe2.com',
        'skills'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ',
        'email'        => 'example@gmail.com',
        'siren'        => 123456789,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'nom de la societe2',
        'gerant'       => 'gerant1',
        'adress'    => 'route des poules ',
        'city'        => 'Evreux',
        'zip_code'        => '75000',
        'phone'        => '0232434324',
        'site_web'        => 'societe1.com',
        'skills'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ',
        'email'        => 'example2@gmail.com',
        'siren'        => 123456787,
        'created_at'  => $date
      );

      DB::table('society')->insert($society);

  
  }

}
