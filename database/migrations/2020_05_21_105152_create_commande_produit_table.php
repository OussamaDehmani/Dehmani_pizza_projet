<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');;
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
        Schema::dropIfExists('commande_produit');
    }
}
