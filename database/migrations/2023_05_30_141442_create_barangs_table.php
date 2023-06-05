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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('harga');
            $table->string('jenis');
            $table->unsignedBigInteger('id_distributor'); // Menambahkan kolom untuk foreign key
            $table->foreign('id_distributor')->references('id')->on('distributors'); // Menambahkan foreign key constraint
            $table->timestamps();
        });

        // Schema::table('barangs', function (Blueprint $table) {
        //     $table->foreign('id_distributor')->references('id')->on('Distributor');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
