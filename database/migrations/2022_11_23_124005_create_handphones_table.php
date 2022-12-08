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
        Schema::create('handphones', function (Blueprint $table) {
            $table->id();
            $table->string('namaHp', 40);
            $table->string('brand', 20);
            $table->integer('harga');
            $table->string('ram', 20);
            $table->string('rom', 20);
            $table->string('battery', 20);
            $table->string('ukuran-layar', 20);
            $table->string('resolusi-layar', 20);
            $table->string('anti air', 20);
            $table->string('teknologi-layar', 30);
            $table->string('kamera-utama', 30);
            $table->string('kamera-depan', 20);
            $table->string('cpu-type', 20);
            $table->string('processor', 25);
            $table->string('foto', 40);
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
        Schema::dropIfExists('handphones');
    }
};
