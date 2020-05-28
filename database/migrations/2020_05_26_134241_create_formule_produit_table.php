<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormuleProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formule_produit', function (Blueprint $table) {
            $table->integer('produit_id')->unsigned();
            $table->integer('formule_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');;
            $table->foreign('formule_id')->references('id')->on('formules')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formule_produit');
    }
}
