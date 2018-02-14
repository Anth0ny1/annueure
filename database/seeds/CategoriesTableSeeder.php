<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [];

        $categories[] = array(
          'categorie_name' => 'Menuiserie',
        );
        $categories[] = array(
          'categorie_name' => 'Plombier',
        );
        $categories[] = array(
          'categorie_name' => 'Chauffagiste',
        );
        $categories[] = array(
          'categorie_name' => 'Couvreur',
        );
        $categories[] = array(
          'categorie_name' => 'Électricien',
        );
        $categories[] = array(
          'categorie_name' => 'Charpentier',
        );
        $categories[] = array(
          'categorie_name' => 'Maçon',
        );
        $categories[] = array(
          'categorie_name' => 'Ébèniste',
        );
        $categories[] = array(
          'categorie_name' => 'Carreleur',
        );
        $categories[] = array(
          'categorie_name' => 'Plaquiste',
        );
        $categories[] = array(
          'categorie_name' => 'Ravaleur',
        );
        $categories[] = array(
          'categorie_name' => 'Terrassier',
        );
        $categories[] = array(
          'categorie_name' => 'Serrurrier',
        );
        $categories[] = array(
          'categorie_name' => 'Décorateur',
        );
        $categories[] = array(
          'categorie_name' => 'Tapissier',
        );
        $categories[] = array(
          'categorie_name' => 'Paysagiste',
        );
        $categories[] = array(
          'categorie_name' => 'Marbrier',
        );
        $categories[] = array(
          'categorie_name' => 'Miroitier',
        );
        $categories[] = array(
          'categorie_name' => 'Fumisterie',
        );

        DB::table('categories')->insert($categories);
    }
}
