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
        'lastname'        => 'NomSociete',
        'name_society'       => 'nom de la societe',
        'adress'    => 'route des champs ',
        'city'        => 'Paris',
        'phone'        => '0232324324',
        'email'        => 'example@gmail.com',
        'siren'        => 123456789,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'lastname'        => 'NomSociete2',
        'name_society'       => 'nom de la societe2',
        'adress'    => 'route des poules ',
        'city'        => 'Evreux',
        'phone'        => '0232434324',
        'email'        => 'example2@gmail.com',
        'siren'        => 123456787,
        'created_at'  => $date
      );

      DB::table('society')->insert($society);
  }
}
