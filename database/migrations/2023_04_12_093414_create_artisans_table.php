<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adresse');
            $table->integer('ID_number');
            $table->string('certificate');           
            $table->foreignId("categorie_id")->constrained("categories");
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("ville_id")->constrained("villes");
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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropConstrainedForeignId("categories_id");
        });
        Schema::table('villes', function (Blueprint $table) {
            $table->dropConstrainedForeignId("villes_id");
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId("users_id");
        });
       
        Schema::dropIfExists('artisans');
    }
}
