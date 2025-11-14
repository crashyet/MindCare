<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleRead;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;

class ArticleController extends Controller
{
    public function index()
    {
        // ambil semua artikel yang dipublikasikan
        $articles = Article::where('published', true)
                    ->latest()
                    ->get();

        // kirim ke view
        return view('user.artikel', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // Naikkan jumlah views
        $article->increment('views');

        // Simpan ke tabel article_reads kalau user login
        if (Auth::check()) {
            $user = Auth::user();

            // Cek apakah user sudah pernah baca artikel ini
            $alreadyRead = ArticleRead::where('user_id', $user->id)
                ->where('article_id', $article->id)
                ->exists();

            if (!$alreadyRead) {
                ArticleRead::create([
                    'user_id' => $user->id,
                    'article_id' => $article->id,
                    'read_at' => now(),
                ]);
            }
        }

        Activity::create([
    'user_id' => Auth::id(),
    'type' => 'artikel',
    'title' => 'Membaca artikel: ' . $article->title,
]);


        // Ambil artikel lain sebagai rekomendasi
        $related = Article::where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        return view('user.artikelDetail', compact('article', 'related'));
    }



    public function like($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        
        // Langsung increment likes tanpa cek apapun
        $article->increment('likes');

        return response()->json([
            'success' => true,
            'likes' => $article->fresh()->likes,
        ]);
    }

}
