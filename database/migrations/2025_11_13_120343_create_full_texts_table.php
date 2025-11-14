<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('full_texts', function (Blueprint $table) {
            $table->id();

            // Relasi utama
            $table->unsignedBigInteger('user_id')->nullable(); // kalau belum login bisa null
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('question_id');

            // Jawaban & skor
            $table->string('jawaban');
            $table->integer('skor')->default(0);

            // Unik untuk setiap percobaan tes (misalnya pakai UUID)
            $table->string('attempt_id')->index();

            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('full_texts');
    }
};
