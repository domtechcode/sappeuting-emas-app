<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_survei_p3kes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('data_penduduk_id')->nullable();
            $table->foreign('data_penduduk_id')->references('id')->on('data_penduduks')->onDelete('cascade');

            $table->text('bpnt')->nullable();
            $table->text('bpum')->nullable();
            $table->text('bst')->nullable();
            $table->text('pkh')->nullable();
            $table->text('sembako')->nullable();
            $table->text('pra_kerja')->nullable();
            $table->text('kur')->nullable();

            $table->text('sumber_penghasilan')->nullable();

            $table->text('aset')->nullable();
            $table->text('tabungan')->nullable();
            $table->text('ac')->nullable();
            $table->text('televisi_layar_datar')->nullable();
            $table->text('lemari_es_kulkas')->nullable();
            $table->text('komputer_laptop')->nullable();
            $table->text('sepeda_motor')->nullable();
            $table->text('mobil')->nullable();
            $table->text('kapal_perahu_motor_perahu')->nullable();
            $table->text('emas_perhiasan')->nullable();
            $table->text('hewan_ternak')->nullable();
            $table->text('lahan')->nullable();
            $table->text('rumah_ditempat_lain')->nullable();

            $table->text('beton')->nullable();
            $table->text('genteng')->nullable();
            $table->text('seng_atap')->nullable();
            $table->text('asbes_seng')->nullable();
            $table->text('kayu_sirap')->nullable();
            $table->text('bambu_atap')->nullable();
            $table->text('jerami_ijuk_rumbia_daun_daunan')->nullable();
            $table->text('atap_rumah_lainnya')->nullable();
            $table->text('kondisi_atap_rumah')->nullable();

            $table->text('tembok')->nullable();
            $table->text('plasteran_anyaman_bambu_kawat')->nullable();
            $table->text('kayu_papan_dinding')->nullable();
            $table->text('anyaman_bambu')->nullable();
            $table->text('batang_kayu')->nullable();
            $table->text('bambu_dinding')->nullable();
            $table->text('seng_dinding')->nullable();
            $table->text('dinding_rumah_lainnya')->nullable();
            $table->text('kondisi_dinding_rumah')->nullable();

            $table->text('keramik_granit_marmer_ubin_tegel_teraso')->nullable();
            $table->text('keramik')->nullable();
            $table->text('parket_vinil_karpet')->nullable();
            $table->text('ubin_tegel_teraso')->nullable();
            $table->text('kayu_papan_lantai')->nullable();
            $table->text('semen')->nullable();
            $table->text('bambu_lantai')->nullable();
            $table->text('tanah')->nullable();
            $table->text('lantai_rumah_lainnya')->nullable();
            $table->text('kondisi_lantai_rumah')->nullable();

            $table->text('listrik_pln_meteran')->nullable();
            $table->text('listrik_pln_non_meteran')->nullable();
            $table->text('listrik_non_pln')->nullable();
            $table->text('bukan_listrik')->nullable();
            $table->text('watt_listrik')->nullable();

            $table->text('air_kemasan_isi_ulang')->nullable();
            $table->text('ledeng_pam')->nullable();
            $table->text('sumur_bor')->nullable();
            $table->text('sumur_terlindung')->nullable();
            $table->text('sumur_tidak_terlindung')->nullable();
            $table->text('mata_air_terlindung')->nullable();
            $table->text('air_permukaan_sungai_danau_dll')->nullable();
            $table->text('air_hujan')->nullable();
            $table->text('air_minum_lainnya')->nullable();

            $table->text('milik_sendiri_fasilitas_buang_air_besar')->nullable();
            $table->text('umum_bersama')->nullable();
            $table->text('fasilitas_buang_air_besar_lainnya')->nullable();
            $table->text('tidak_ada_fasilitas_buang_air_besar')->nullable();

            $table->text('luas_rumah')->nullable();

            $table->text('jumlah_orang_dirumah')->nullable();

            $table->text('listrik')->nullable();
            $table->text('gas_12kg')->nullable();
            $table->text('gas_5_5kg')->nullable();
            $table->text('gas_3kg')->nullable();
            $table->text('minyak_tanah')->nullable();
            $table->text('briket_kayu_arang')->nullable();
            $table->text('bahan_bakar_utama_lainnya')->nullable();

            $table->text('bebas_sewa_menumpang')->nullable();
            $table->text('kontrak_sewa')->nullable();
            $table->text('milik_sendiri')->nullable();
            $table->text('dinas')->nullable();
            $table->text('kepemilikan_rumah_lainnya')->nullable();

            $table->string('status')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_survei_p3kes');
    }
};
