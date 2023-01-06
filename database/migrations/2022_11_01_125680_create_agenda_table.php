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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('agenda');
            $table->unsignedBigInteger('ekstra_id');
            $table->foreign('ekstra_id')->references('id')->on('ekstra')->onDelete('cascade');
            $table->unsignedBigInteger('pelatih_id');
            $table->foreign('pelatih_id')->references('id')->on('pelatih')->onDelete('cascade');
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
        Schema::dropIfExists('agenda');
    }
};
