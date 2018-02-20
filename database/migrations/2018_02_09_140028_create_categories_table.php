<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categorie_name');
            $table->char('path',190)->nullable();
            $table->string('original_name')->nullable();
            $table->char('image_name',190)->nullable();
            $table->char('description',190)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

              Schema::dropIfExists('society_categories');
              Schema::dropIfExists('society');
              Schema::dropIfExists('categories');

    }
}
