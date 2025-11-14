<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Jika tabel belum ada: buat lengkap
        if (! Schema::hasTable('full_texts')) {
            Schema::create('full_texts', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('test_id')->nullable();
                $table->unsignedBigInteger('question_id');
                $table->string('jawaban')->nullable();
                $table->integer('skor')->default(0);
                $table->string('attempt_id')->nullable();
                $table->timestamps();

                // foreign keys (cek tabel ada sebelum menambahkan FK jika perlu)
                // Jika FK menyebabkan error, kamu bisa comment baris-baris FK
                // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                // $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
                // $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            });
            return;
        }

        // Jika tabel sudah ada: tambahkan kolom yang belum ada
        Schema::table('full_texts', function (Blueprint $table) {
            if (! Schema::hasColumn('full_texts', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
            if (! Schema::hasColumn('full_texts', 'test_id')) {
                $table->unsignedBigInteger('test_id')->nullable()->after('id');
            }
            if (! Schema::hasColumn('full_texts', 'attempt_id')) {
                $table->string('attempt_id')->nullable()->after('skor');
            }
        });
    }

    public function down(): void
    {
        // Hati-hati: jangan drop table kalau data penting.
        // Kita hanya menghapus kolom yang ditambahkan oleh migration ini.
        Schema::table('full_texts', function (Blueprint $table) {
            if (Schema::hasColumn('full_texts', 'attempt_id')) {
                $table->dropColumn('attempt_id');
            }
            if (Schema::hasColumn('full_texts', 'test_id')) {
                $table->dropColumn('test_id');
            }
            if (Schema::hasColumn('full_texts', 'user_id')) {
                $table->dropColumn('user_id');
            }
        });

        // Jika tabel awalnya tidak ada dan kita membuatnya, kamu bisa uncomment baris berikut
        // Schema::dropIfExists('full_texts');
    }
};
