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
        Schema::create('ekstra', function (Blueprint $table) {
            $table->id();
            $table->string("nama_ekstra");
            $table->string("jadwal");
            $table->unsignedBigInteger('pelatih_id');
            $table->foreign('pelatih_id')->references('id')->on('pelatih')->onDelete('cascade');
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')->references('id')->on('agenda')->onDelete('cascade');
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
        Schema::dropIfExists('ekstra');
    }
};
