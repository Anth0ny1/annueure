<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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

        DB::table('categories')->insert($categories);
    }
}
