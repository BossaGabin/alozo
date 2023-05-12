<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisHasFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_has_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('devis_id')->constrained('devis');
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
        Schema::table('devis', function (Blueprint $table) {
            $table->dropConstrainedForeignId("devis_id");
        });
        
        Schema::dropIfExists('devis_has_files');
    }
}
