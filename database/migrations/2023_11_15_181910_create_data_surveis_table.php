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
        Schema::create('data_surveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('data_penduduk_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('data_surveis');
    }
};
