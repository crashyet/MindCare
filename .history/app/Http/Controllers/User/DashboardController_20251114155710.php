<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use App\Models\ArticleRead;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik artikel yang sudah dibaca user
        $articleStats = $this->getArticleStats();

        // Aktivitas terbaru user (ambil 5 aktivitas terakhir)
        $activities = Activity::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('articleStats', 'activities'));
    }

    /**
     * Statistik Riwayat Membaca Artikel User
     */
    private function getArticleStats()
    {
        $user = Auth::user();

        if (!$user) {
            return [
                'total_read' => 0,
                'recent_reads' => []
            ];
        }

        // Total artikel yang pernah dibaca
        $totalRead = ArticleRead::where('user_id', $user->id)->count();

        // 5 riwayat membaca terbaru
        $recentReads = ArticleRead::with('article')
            ->where('user_id', $user->id)
            ->latest('read_at')
            ->take(5)
            ->get()
            ->map(function ($read) {
                return [
                    'title' => $read->article->title ?? 'Tidak diketahui',
                    'category' => $read->article->category ?? 'Umum',
                    'read_at' => $read->read_at ? $read->read_at->diffForHumans() : '-',
                ];
            });

        return [
            'total_read' => $totalRead,
            'recent_reads' => $recentReads
        ];
    }
}
