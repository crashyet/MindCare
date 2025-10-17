<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'test_id' => 'required|exists:tests,id',
            'pertanyaan' => 'required|string',
            'jawaban.*' => 'required|string',
            'skor.*' => 'required|integer|min:0|max:10',
        ]);

        // Buat pertanyaan baru
        $question = Question::create([
            'test_id' => $validated['test_id'],
            'pertanyaan' => $validated['pertanyaan'],
        ]);

        // Loop semua jawaban yang dikirim (misal 4 opsi)
        foreach ($validated['jawaban'] as $index => $jawabanText) {
            Answer::create([
                'question_id' => $question->id,
                'jawaban' => $jawabanText,
                'skor' => $validated['skor'][$index] ?? 0,
            ]);
        }

        return back()->with('success', 'Pertanyaan dan jawaban berhasil ditambahkan.');
    }
}
