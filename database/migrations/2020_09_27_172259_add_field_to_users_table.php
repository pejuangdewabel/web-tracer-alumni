<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('jk');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('agama');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('tahun_masuk_sma');
            $table->string('tahun_lulus_sma');
            $table->string('jurusan_sma');
            $table->string('organisasi');
            $table->string('tahun_bekerja');
            $table->string('gaji');
            $table->string('jabatan');
            $table->string('nama_perusahaan');
            $table->text('alamat_perusahaan');
            $table->string('tahun_masuk_kuliah');
            $table->string('tahun_lulus_kuliah');
            $table->string('strata');
            $table->string('jurusan_kuliah');
            $table->string('nama_kampus');
            $table->text('alamat_kampus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            
        });
    }
}
