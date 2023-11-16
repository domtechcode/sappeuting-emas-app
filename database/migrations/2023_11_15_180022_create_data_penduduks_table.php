<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
USE Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_keluarga_indonesia')->nullable();
            $table->string('nama_kepala_keluarga')->nullable();
            $table->string('nama_istri')->nullable();
            $table->string('status_keluarga')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('rw')->nullable();
            $table->string('rt')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduks');
    }
};