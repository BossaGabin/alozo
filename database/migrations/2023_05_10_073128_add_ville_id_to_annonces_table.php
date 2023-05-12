<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVilleIdToAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonces', function (Blueprint $table) {
            //
            $table->foreignId("ville_id")->constrained("villes");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('villes', function (Blueprint $table) {
            $table->dropConstrainedForeignId("villes_id");
        });
        Schema::table('annonces', function (Blueprint $table) {
            //
        });
    }
}
