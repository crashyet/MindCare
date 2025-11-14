<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Judul aktivitas (misal: Membaca artikel: Mengatasi Kecemasan)
            $table->string('title');

            // Kategori (Artikel, Forum, Tes, Chatbot)
            $table->string('type');

            // Optional: ID sumber (artikel_id, forum_id, test_id)
            $table->unsignedBigInteger('reference_id')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
