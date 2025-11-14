<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::where('status_publikasi', true)
            ->withCount('questions')
            ->latest()
            ->get();

        // Ambil riwayat user saat ini
        $history = DB::table('full_texts')
            ->select('attempt_id', 'test_id', DB::raw('SUM(skor) as total_skor'), DB::raw('MIN(created_at) as tanggal'))
            ->where('user_id', auth()->id() ?? 1)
            ->groupBy('attempt_id', 'test_id')
            ->orderBy('tanggal', 'desc')
            ->get();

        // Join dengan test agar dapat judul tes
        foreach ($history as $h) {
            $h->test = Test::find($h->test_id);
        }

        return view('user.tes-mental', compact('tests', 'history'));
    }


    public function show($id, $no = 1)
    {
        $test = \App\Models\Test::with(['questions.answers'])->findOrFail($id);
        $questions = $test->questions;

        // pastikan $no adalah integer dan minimal 1
        $no = (int) $no;
        if ($no < 1) {
            $no = 1;
        }

        // ambil soal berdasarkan urutan (cek index ada)
        $index = $no - 1;

        $currentQuestion = $questions[$index] ?? null;

        if (!$currentQuestion) {
            // kalau tidak ada soal (misal $no terlalu besar), arahkan ke hasil
            return redirect()->route('user.tests.result', $id);
        }

        $totalQuestions = $questions->count();

        return view('user.tes-mental-isi', compact('test', 'currentQuestion', 'no', 'totalQuestions'));
    }

    public function answer(Request $request, $id, $no)
    {
        $test = Test::findOrFail($id);
        $no = (int) $no;

        // ambil atau buat attempt unik
        $attemptId = session('attempt_id');
        if (!$attemptId) {
            $attemptId = uniqid('attempt_');
            session(['attempt_id' => $attemptId]);
        }

        $currentQuestion = $test->questions()->skip($no - 1)->first();

        if ($currentQuestion) {
            // 🔹 Cek apakah jawaban untuk soal ini sudah ada
            $exists = DB::table('full_texts')
                ->where('attempt_id', $attemptId)
                ->where('question_id', $currentQuestion->id)
                ->exists();

            DB::table('full_texts')->updateOrInsert(
                [
                    'attempt_id' => $attemptId,
                    'question_id' => $currentQuestion->id,
                ],
                [
                    'user_id' => auth()->id() ?? 1,
                    'test_id' => $test->id,
                    'jawaban' => $request->input('jawaban'),
                    'skor' => (int) $request->input('jawaban'),
                    'updated_at' => now(),
                ]
            );
        }

        $totalQuestions = $test->questions()->count();

        if ($no < $totalQuestions) {
            return redirect()->route('user.tests.show', [$test->id, $no + 1]);
        } else {
            return redirect()->route('user.tests.result', [
                'id' => $test->id,
                'attempt' => $attemptId
            ]);
        }
    }



    public function result($id, $attempt)
    {
        $test = Test::with('questions')->findOrFail($id);

        // Ambil attempt langsung dari parameter
        $attemptId = $attempt;

        $answers = DB::table('full_texts')
            ->where('test_id', $id)
            ->where('user_id', auth()->id() ?? 1)
            ->where('attempt_id', $attemptId)
            ->get();

        $totalScore = $answers->sum('skor');

        // Hapus session attempt supaya bisa tes ulang
        session()->forget('attempt_id');

        if ($totalScore < 10) {
            $interpretasi = 'Tingkat stres Anda rendah. Kondisi mental Anda stabil.';
        } elseif ($totalScore < 20) {
            $interpretasi = 'Anda mengalami stres ringan. Coba luangkan waktu untuk relaksasi.';
        } elseif ($totalScore < 30) {
            $interpretasi = 'Stres sedang. Disarankan mulai memperhatikan kesehatan mental Anda.';
        } else {
            $interpretasi = 'Stres tinggi. Sebaiknya konsultasikan dengan profesional.';
        }

        return view('user.tes-mental-result', compact('test', 'totalScore', 'interpretasi'));

        
    }
}
