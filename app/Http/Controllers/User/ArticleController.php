<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Article;

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
