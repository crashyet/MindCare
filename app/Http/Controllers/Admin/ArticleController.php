<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel + fitur search
     */
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('search') && $request->search !== '') {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('author_name', 'like', "%{$search}%");
        }

        $articles = $query->latest()->paginate(10);

        return view('admin.artikel.manajemen-artikel', compact('articles'));
    }

    /**
     * Tampilkan form tambah artikel
     */
    public function create()
    {
        return view('admin.artikel.tambah-artikel');
    }

    /**
     * Simpan artikel baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'author_name' => 'required|string|max:255',
            'image_url' => 'nullable|url',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'published' => 'nullable|boolean',
        ]);

        Article::create([
            ...$validated,
            'published' => $request->has('published'),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.artikel.edit-artikel', compact('article'));
    }

    /**
     * Update artikel
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'author_name' => 'required|string|max:255',
            'image_url' => 'nullable|url',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'published' => 'nullable|boolean',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            ...$validated,
            'published' => $request->has('published'),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Hapus artikel
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }

    /**
     * Tambah view count
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views');
        return view('artikel.show', compact('article'));
    }

    /**
     * Tambah like count (opsional pakai AJAX)
     */
    public function like($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('likes');
        return response()->json(['likes' => $article->likes]);
    }

        /**
     * Toggle status artikel: publish <-> draft
     */
    public function toggleStatus($id)
    {
        $article = Article::findOrFail($id);
        $article->published = !$article->published;
        $article->save();

        $status = $article->published ? 'dipublikasikan' : 'diubah ke draft';

        return redirect()
            ->route('admin.articles.index')
            ->with('success', "Status artikel berhasil {$status}.");
    }

}