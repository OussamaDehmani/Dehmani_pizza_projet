<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeFormuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_formule', function (Blueprint $table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('formule_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');;
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
        Schema::dropIfExists('commande_formule');
    }
}
