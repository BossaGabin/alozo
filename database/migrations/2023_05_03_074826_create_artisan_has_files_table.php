<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisanHasFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisan_has_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId("artisan_id")->constrained("artisans");
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
            $table->dropConstrainedForeignId("artisan_id");
        });
        Schema::dropIfExists('artisan_has_files');
    }
}
