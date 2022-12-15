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
         Schema::create('commande_details', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('commande_id');
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
        Schema::dropForeign(['produit_id']);
        Schema::dropColumn('produit_id');
        Schema::dropForeign(['commande_id']);
        Schema::dropColumn('commande_id');
        Schema::dropIfExists('commande_details');
    }

};
