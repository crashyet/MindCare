<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('judul_tes');
            $table->text('deskripsi')->nullable();
            $table->string('kategori');
            $table->integer('durasi')->comment('dalam menit');
            $table->boolean('status_publikasi')->default(false);
            $table->integer('participants_count')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
