<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeSuplementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_suplement', function (Blueprint $table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('suplement_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');;
            $table->foreign('suplement_id')->references('id')->on('suplements')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_suplement');
    }
}
