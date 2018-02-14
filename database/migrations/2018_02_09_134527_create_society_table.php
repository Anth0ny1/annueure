<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('society', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('name_society');
            $table->string('gerant');
            $table->string('adress');
            $table->string('city');
            $table->string('zip_code');
            $table->char('phone',10);
            $table->string('site_web');
            $table->char('skills',190);
            $table->string('email')->unique();
            $table->integer('siren')->unique();
            $table->char('path',190)->nullable();
            $table->string('original_name')->nullable();
            $table->char('image_name',190)->nullable();
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
    }
}
