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
        Schema::create('tpelanggans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_transaksi', ['Tunai', 'Non-Tunai', 'Kredit']);
            $table->integer('total');
            $table->date('tanggal');
            $table->timestamps();

            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_layanan');
            $table->unsignedBigInteger('id_barang');

            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->foreign('id_layanan')->references('id')->on('layanans');
            $table->foreign('id_barang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tpelanggans');
    }
};
