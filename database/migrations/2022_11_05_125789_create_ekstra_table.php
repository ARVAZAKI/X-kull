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
            $table->char("foto");
            $table->bigInteger("id_pelatih")->unsigned();
            $table->foreign("id_pelatih")->references("id")->on("pelatih")
            ->onDelete("cascade")
            ->onUpdate("cascade");
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
