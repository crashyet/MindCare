<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('full_texts', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');      // siapa yang isi tes
    $table->unsignedBigInteger('test_id');
    $table->unsignedBigInteger('question_id');
    $table->string('jawaban');
    $table->integer('skor');
    $table->string('attempt_id');               // ID unik tiap percobaan
    $table->timestamps();

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
