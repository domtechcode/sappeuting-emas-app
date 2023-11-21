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
        Schema::create('data_survei_krs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('data_penduduk_id')->nullable();
            $table->foreign('data_penduduk_id')->references('id')->on('data_penduduks')->onDelete('cascade');
            $table->text('answer_1')->nullable();
            $table->text('answer_2')->nullable();
            $table->text('answer_3')->nullable();
            $table->text('answer_4')->nullable();
            $table->text('answer_5')->nullable();
            $table->text('answer_6')->nullable();
            $table->text('answer_7')->nullable();
            $table->text('answer_8')->nullable();
            $table->text('answer_9')->nullable();
            $table->text('answer_10')->nullable();
            $table->text('answer_11')->nullable();
            $table->text('answer_12')->nullable();
            $table->text('answer_13')->nullable();
            $table->text('answer_14')->nullable();
            $table->text('answer_15')->nullable();
            $table->text('answer_16')->nullable();
            $table->text('answer_17')->nullable();
            $table->text('answer_18')->nullable();
            $table->text('answer_19')->nullable();
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
        Schema::dropIfExists('data_survei_krs');
    }
};
