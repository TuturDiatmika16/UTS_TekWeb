<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignDbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penumpang', function (Blueprint $table) {
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penerbangan')->references('id')->on('penerbangan')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('penerbangan', function (Blueprint $table) {
            $table->foreign('asal')->references('id')->on('lokasi')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tujuan')->references('id')->on('lokasi')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('pemesanan', function (Blueprint $table) {
            $table->foreign('id_penumpang')->references('id')->on('penumpang')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('kelas', function (Blueprint $table) {
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign('id_penumpang')->references('id')->on('penumpang')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('kelas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
