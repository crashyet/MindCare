<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    /**
     * Menampilkan semua forum
     */
    public function index()
    {
        // $forums = Forum::with('user')->latest()->get();

        // Ambil semua forum beserta user dan jumlah reply-nya
        $forums = Forum::with('user')
            ->withCount(['replies', 'likes']) // tambahkan likes_count juga
            ->latest()
            ->get();

        return view('user.forum.forum', compact('forums'));
    }

    /**
     * Menyimpan forum baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'content'  => 'required|string',
        ]);

        // Buat slug unik dari judul
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;

        while (Forum::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        // Simpan forum
        $forum = Forum::create([
            'user_id'  => Auth::id(),
            'title'    => $validated['title'],
            'slug'     => $slug,
            'category' => $validated['category'],
            'content'  => $validated['content'],
        ]);

        return redirect()
            ->route('forum.show', $forum->slug)
            ->with('success', 'Diskusi berhasil dibuat!');
    }

    /**
     * Menampilkan detail forum berdasarkan slug
     */
    public function show($slug)
    {
        // Ambil forum berdasarkan slug
        $forum = Forum::with(['user', 'replies.user'])->where('slug', $slug)->firstOrFail();

        // Hitung total balasan
        $totalReplies = $forum->replies->count();

        return view('user.forum.show', compact('forum', 'totalReplies'));

        Activity::create([
    'user_id' => Auth::id(),
    'type' => 'forum',
    'title' => 'Mengikuti diskusi forum: ' . $forum->title,
]);

    }
}
