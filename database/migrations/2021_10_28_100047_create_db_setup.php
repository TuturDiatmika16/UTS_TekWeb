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
            $table->string('nm_penumpang', 50);
            $table->string('alamat', 100);
            $table->string('no_telp', 15);
            $table->string('pekerjaan', 100);
            $table->timestamps();

            // $table->foreign('id')->references('id')->on('pemesanan')
            //     ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id')->references('id')->on('pembayaran')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asal');
            $table->unsignedBigInteger('tujuan');
            $table->date('waktu_keberangkatan');
            $table->date('waktu_tiba');
            $table->timestamps();

            $table->foreign('asal')->references('id')->on('lokasi')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tujuan')->references('id')->on('lokasi')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penerbangan')->references('id')->on('penumpang')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pemesanan');
            $table->string('no_tiket', 15);
            $table->timestamps();

            // $table->foreign('id_pemesanan')->references('id')->on('penumpang')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelas', 20);
            $table->string('harga_tiket', 20);
            $table->timestamps();

            // $table->foreign('id')->references('id')->on('pembayaran')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_pembayaran', 50);
            $table->timestamps();

            // $table->foreign('id_pembayaran')->references('id')->on('kelas')
            //     ->onUpdate('cascade')->onDelete('cascade');
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
