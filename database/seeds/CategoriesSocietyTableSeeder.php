<?php

use Illuminate\Database\Seeder;

class CategoriesSocietyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories_society[]= array(
        'id' => 1,
        'society_id' => 1,
        'categories_id' => 3
      );
      $categories_society[]= array(
        'id' => 2,
        'society_id' => 1,
        'categories_id' => 2
      );

      DB::table('categories_society')->insert($categories_society);
    }
}
