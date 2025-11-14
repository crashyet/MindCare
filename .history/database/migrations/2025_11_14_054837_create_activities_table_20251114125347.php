<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            // Relasi user
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Jenis aktivitas
            $table->enum('type', ['artikel', 'forum', 'tes', 'chatbot', 'mood']);

            // Judul aktivitas (opsional)
            $table->string('title')->nullable();

            // timestamps (created_at & updated_at)
            $table->timestamps();

            // Optional: index agar query cepat
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
