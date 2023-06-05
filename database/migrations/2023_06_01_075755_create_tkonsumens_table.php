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
        Schema::create('tkonsumens', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_transaksi', ['Tunai', 'Non-Tunai', 'Kredit']);
            $table->integer('total');
            $table->date('tanggal');
            $table->timestamps();

            $table->unsignedBigInteger('id_konsumen');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_layanan');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_penukaran');

            $table->foreign('id_konsumen')->references('id')->on('konsumens');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->foreign('id_layanan')->references('id')->on('layanans');
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('id_penukaran')->references('id')->on('penukarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tkonsumens');
    }
};
