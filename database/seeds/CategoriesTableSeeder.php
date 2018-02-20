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
           'path_categorie' => 'upload/categorie/2018/02',
           'original_name' => 'craft-1741196.jpg',
          'description' => 'Découvrir le métier de menuisier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Plombier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'plumber-22-1519065398.jpg',
          'description' => 'Découvrir le métier de Plombier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Chauffagiste',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'plumbing-8-1519065409.jpg',
          'description' => 'Découvrir le métier de Chauffagiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Couvreur',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '2cf8663367-1519065444.jpg',
          'description' => 'Découvrir le métier de Couvreur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Électricien',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '230083-P1ZDYD-191.jpg',
          'description' => 'Découvrir le métier d\'Éléctricien dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Charpentier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'Charpentier_couvreur_zingueur_Lyon_69.jpg',
          'description' => 'Découvrir le métier de Charpentier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Maçon',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'construction-257326_1920.jpg',
          'description' => 'Découvrir le métier de Maçon dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Ébèniste',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '3151jpg-1519133741.jpg',
          'description' => 'Découvrir le métier d\'Ébèniste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Carreleur',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'steinplatte-1331969_1920.jpg',
          'description' => 'Découvrir le métier de Carreleur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Plaquiste',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '230050-P1ZDV4-803.jpg',
          'description' => 'Découvrir le métier de Plaquiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Ravaleur',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'house-cons-1519065720.jpg',
          'description' => 'Découvrir le métier de Ravaleur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Terrassier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'demolition-855079_1920.jpg',
          'description' => 'Découvrir le métier de Terrassier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Serrurrier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '179314-owj-1519134002.jpg',
          'description' => 'Découvrir le métier de Serrurrier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Décorateur',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '5137.jpg',
          'description' => 'Découvrir le métier de Décorateur dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Tapissier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '5123.jpg',
          'description' => 'Découvrir le métier de Tapissier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Paysagiste',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'box-hedge-topiary-869073_1920.jpg',
          'description' => 'Découvrir le métier de Paysagiste dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Marbrier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => '420.jpg',
          'description' => 'Découvrir le métier de Marbrier dans l\'Eure. ',
        );
        $categories[] = array(
          'categorie_name' => 'Miroitier',
          'path_categorie' => 'upload/categorie/2018/02',
          'original_name' => 'window-3065340_1920.jpg',
          'description' => 'Découvrir le métier de Miroitier dans l\'Eure. ',
        );


        DB::table('categories')->insert($categories);
    }
}
