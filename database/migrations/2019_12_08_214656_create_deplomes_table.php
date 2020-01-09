<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deplomes', function (Blueprint $table) {
            $table->bigIncrements('id_deplome');
            $table->string('nom_deplome');
            $table->string('type_deplome');
            $table->string('duree_deplome');
            $table->string('nometablessent');
            $table->bigInteger('id_etap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deplomes');
    }
}
