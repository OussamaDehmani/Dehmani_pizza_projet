<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->dateTime('date_pub');
            $table->text('text');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('produits')->onDelete('cascade');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('commentaires');
    }
}
