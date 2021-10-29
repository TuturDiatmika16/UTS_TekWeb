<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('nm_lokasi', 100);
            $table->timestamps();
        });

        Schema::create('penumpang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_penerbangan');
            $table->string('nm_penumpang', 50);
            $table->string('alamat', 100);
            $table->string('no_telp', 15);
            $table->string('pekerjaan', 100);
            $table->timestamps();
        });

        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asal');
            $table->unsignedBigInteger('tujuan');
            $table->date('waktu_keberangkatan');
            $table->date('waktu_tiba');
            $table->timestamps();
        });

        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penumpang');
            $table->date('tgl_pemesanan');
            $table->string('no_tiket', 15);
            $table->timestamps();
        });

        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembayaran');
            $table->string('jenis_kelas', 20);
            $table->string('harga_tiket', 20);
            $table->timestamps();
        });
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penumpang');
            $table->unsignedBigInteger('id_kelas');
            $table->string('tgl_pembayaran', 50);
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
        Schema::dropIfExists('penumpang');
        Schema::dropIfExists('penerbangan');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('pemesanan');
        Schema::dropIfExists('lokasi');
    }
}
