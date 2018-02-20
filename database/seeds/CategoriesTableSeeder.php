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
           // 'path' => 'seed',
           // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de menuisier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Plombier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Plombier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Chauffagiste',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Chauffagiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Couvreur',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Couvreur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Électricien',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier d\'Éléctricien dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Charpentier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Charpentier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Maçon',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Maçon dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Ébèniste',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier d\'Ébèniste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Carreleur',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Carreleur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Plaquiste',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Plaquiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Ravaleur',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Ravaleur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Terrassier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Terrassier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Serrurrier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Serrurrier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Décorateur',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Décorateur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Tapissier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Tapissier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Paysagiste',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Paysagiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Marbrier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Marbrier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Miroitier',
          // 'path' => 'seed',
          // 'original_name' => 'craft-1741196.jpg',
          // 'description' => 'Découvrir le métier de Miroitier dans l\'Eure. ',
        );


        DB::table('categories')->insert($categories);
    }
}
