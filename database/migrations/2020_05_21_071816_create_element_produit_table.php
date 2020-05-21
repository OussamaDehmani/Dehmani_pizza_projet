<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_produit', function (Blueprint $table) {
            $table->integer('element_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->foreign('element_id')->references('id')->on('elements')->onDelete('cascade');;
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('element_produit');
    }
}
