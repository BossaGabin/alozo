<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->date('delivery_date');
            $table->foreignId("artisans_id")->constrained("artisans");
            $table->foreignId("annonces_id")->constrained("annonces");
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
        Schema::table('artisans', function (Blueprint $table) {
        $table->dropConstrainedForeignId("artisans_id");
        });
        Schema::table('annonces', function (Blueprint $table) {
        $table->dropConstrainedForeignId("annonces_id");
        });
        Schema::dropIfExists('devis');
    }
}
