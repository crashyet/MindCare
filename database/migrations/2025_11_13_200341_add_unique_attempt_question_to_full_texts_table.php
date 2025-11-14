<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('full_texts', function (Blueprint $table) {
            $table->unique(['attempt_id', 'question_id'], 'full_texts_attempt_question_unique');
        });
    }

    public function down(): void
    {
        Schema::table('full_texts', function (Blueprint $table) {
            $table->dropUnique('full_texts_attempt_question_unique');
        });
    }
};
