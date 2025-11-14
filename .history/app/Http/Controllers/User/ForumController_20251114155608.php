<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Activity;

class ForumController extends Controller
{
    /**
     * Menampilkan semua forum
     */
    public function index()
    {
        $forums = Forum::with('user')
            ->withCount(['replies', 'likes'])
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

        // Buat slug unik
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

        // Catat aktivitas
        Activity::create([
            'user_id' => Auth::id(),
            'type' => 'forum',
            'title' => 'Membuat diskusi baru: ' . $forum->title,
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
        $forum = Forum::with(['user', 'replies.user'])
            ->where('slug', $slug)
            ->firstOrFail();

        $totalReplies = $forum->replies->count();

        // Catat aktivitas (diletakkan sebelum return)
        Activity::create([
            'user_id' => Auth::id(),
            'type' => 'forum',
            'title' => 'Mengikuti diskusi forum: ' . $forum->title,
        ]);

        return view('user.forum.show', compact('forum', 'totalReplies'));
    }
}
