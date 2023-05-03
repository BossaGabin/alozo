<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceHasFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_has_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId("annonce_id")->constrained("annonce");
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
        Schema::table('annonces', function (Blueprint $table) {
            $table->dropConstrainedForeignId("annonce_id");
        });
        Schema::dropIfExists('annonce_has_files');
    }
}
