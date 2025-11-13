<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ArticleRead;

class DashboardController extends Controller
{
    public function index()
    {
        $articleStats = $this->getArticleStats();
        return view('dashboard', compact('articleStats'));
    }

    private function getArticleStats()
    {
        $user = Auth::user();

        if (!$user) {
            return ['total_read' => 0, 'recent_reads' => []];
        }

        $totalRead = ArticleRead::where('user_id', $user->id)->count();

        $recentReads = ArticleRead::with('article')
            ->where('user_id', $user->id)
            ->latest('read_at')
            ->take(5)
            ->get()
            ->map(function ($read) {
                return [
                    'title' => $read->article->title,
                    'category' => $read->article->category,
                    'read_at' => $read->read_at->diffForHumans(),
                ];
            });

        return [
            'total_read' => $totalRead,
            'recent_reads' => $recentReads
        ];
    }
}
