<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::withCount('questions')->latest()->get();
        return view('admin.test.manajemen-tes', compact('tests'));
    }

    public function create()
    {
        return view('admin.test.tambah-tes');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'duration' => 'required|integer|min:1',
            'published' => 'nullable|boolean',
            'questions' => 'nullable|array',
            'questions.*.pertanyaan' => 'required|string',
            'questions.*.jawaban' => 'required|array',
            'questions.*.skor' => 'required|array',
        ]);

        // 1️⃣ Simpan tes
        $test = Test::create([
            'judul_tes' => $validated['title'],
            'deskripsi' => $validated['description'],
            'kategori' => $validated['category'],
            'durasi' => $validated['duration'],
            'status_publikasi' => $request->has('published'),
        ]);

        // 2️⃣ Simpan pertanyaan & jawaban
        if ($request->has('questions')) {
            foreach ($request->questions as $q) {
                $question = $test->questions()->create([
                    'pertanyaan' => $q['pertanyaan'],
                ]);

                foreach ($q['jawaban'] as $i => $jawaban) {
                    $question->answers()->create([
                        'jawaban' => $jawaban,
                        'skor' => $q['skor'][$i] ?? 0,
                    ]);
                }
            }
        }

        return redirect()->route('admin.tests.index')->with('success', 'Tes berhasil ditambahkan.');
    }


    public function edit(Test $test)
    {
        return view('admin.tests.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        $validated = $request->validate([
            'judul_tes' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string|max:100',
            'durasi' => 'required|integer|min:1',
            'status_publikasi' => 'nullable|boolean',
        ]);

        $validated['status_publikasi'] = $request->has('status_publikasi');

        $test->update($validated);
        return redirect()->route('admin.tests.index')->with('success', 'Tes berhasil diperbarui.');
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return back()->with('success', 'Tes berhasil dihapus.');
    }
}
