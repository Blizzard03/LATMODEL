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
        Schema::create('table_denda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Pinjam_ID');
            $table->foreignId('Anggota_ID');
            $table->foreignId('Buku_ID');
            $table->integer('Keterlabatan');
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
        Schema::dropIfExists('table_denda');
    }
};
