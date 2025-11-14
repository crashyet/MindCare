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
     * Menampilkan semua forum + statistik
     */
    public function index()
    {
        // Ambil semua forum beserta user dan jumlah reply/like
        $forums = Forum::with('user')
            ->withCount(['replies', 'likes'])
            ->latest()
            ->get();

        // 🔥 Statistik Forum (REAL-TIME)
        $stats = [
            'total_forums'   => Forum::count(),
'active_users' => Reply::distinct('user_id')->count('user_id'),
            'today_forums'   => Forum::whereDate('created_at', today())->count(),
            'today_replies'  => Reply::whereDate('created_at', today())->count(),
        ];

        return view('user.forum.forum', compact('forums', 'stats'));
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
        // Ambil data forum + user + balasan
        $forum = Forum::with(['user', 'replies.user'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Jumlah balasan
        $totalReplies = $forum->replies->count();

        // 🔥 Catat aktivitas pengguna
        Activity::create([
            'user_id' => Auth::id(),
            'type'    => 'forum',
            'title'   => 'Mengikuti diskusi forum: ' . $forum->title,
        ]);

        return view('user.forum.show', compact('forum', 'totalReplies'));
    }
}
