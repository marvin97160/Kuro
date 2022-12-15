<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->string('description');
            $table->string('prix');
            $table->string('image');
            $table->enum('couleur', ['Blanc', 'Noir']);
            $table->enum('taille',['s','m','l','xl']);
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::dropForeign(['categorie_id']);
        Schema::dropColumn('categorie_id');
        Schema::dropIfExists('produits');
    }
};
