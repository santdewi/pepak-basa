<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePamasastrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pamasastras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('material_id');
            $table->foreignId('pcategory_id');
            $table->string('name');
            $table->string('slug');
            $table->string('materi');
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
        Schema::dropIfExists('pamasastras');
    }
}
