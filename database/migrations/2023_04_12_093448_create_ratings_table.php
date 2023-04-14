<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('score');
            $table->string('comment');
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("artisans_id")->constrained("artisans");
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId("users_id");
        });
        Schema::table('artisans', function (Blueprint $table) {
            $table->dropConstrainedForeignId("artisans_id");
        });
        Schema::dropIfExists('ratings');
    }
}
