@extends('app')

@section('title', 'Tambah Artikel')

@section('content')

<x-sidebar></x-sidebar>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
  <div class="p-4 md:p-8">
    <div class="space-y-6">
      <div class="flex items-center gap-4">
        <button onclick="window.history.back()" 
          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium 
          ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 
          focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 
          hover:bg-accent hover:text-accent-foreground h-10 w-10">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
            class="lucide lucide-arrow-left w-5 h-5">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path>
          </svg>
        </button>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Tambah Artikel</h1>
          <p class="text-muted-foreground">Buat artikel kesehatan mental baru</p>
        </div>
      </div>

      <div class="rounded-lg border bg-card text-card-foreground shadow-sm max-w-4xl">
        <div class="flex flex-col space-y-1.5 p-6">
          <h3 class="text-2xl font-semibold leading-none tracking-tight">Detail Artikel</h3>
          <p class="text-sm text-muted-foreground">Masukkan informasi artikel</p>
        </div>

        <div class="p-6 pt-0">
          <form method="POST" action="{{ route('admin.articles.store') }}" class="space-y-4">
            @csrf

            <!-- Judul -->
            <div class="space-y-2">
              <label for="title" class="text-sm font-medium">Judul Artikel *</label>
              <input type="text" id="title" name="title" required 
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" 
                placeholder="Contoh: Mengelola Stres di Tempat Kerja">
            </div>

            <!-- Kategori & Penulis -->
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label for="category" class="text-sm font-medium">Kategori *</label>
                <select id="category" name="category" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm 
                  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                  <option value="" disabled selected>Pilih kategori</option>
                  <option value="Anxiety">Anxiety</option>
                  <option value="Depression">Depression</option>
                  <option value="Stress">Stress</option>
                  <option value="Self-Care">Self-Care</option>
                  <option value="Wellness">Wellness</option>
                </select>
              </div>

              <div class="space-y-2">
                <label for="author_name" class="text-sm font-medium">Nama Penulis *</label>
                <input type="text" id="author_name" name="author_name" required 
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" 
                  placeholder="Dr. Jane Smith">
              </div>
            </div>

            <!-- Gambar -->
            <div class="space-y-2">
              <label for="image_url" class="text-sm font-medium">URL Gambar</label>
              <input type="url" id="image_url" name="image_url" 
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" 
                placeholder="https://example.com/image.jpg">
            </div>

            <!-- Ringkasan -->
            <div class="space-y-2">
              <label for="excerpt" class="text-sm font-medium">Ringkasan *</label>
              <textarea id="excerpt" name="excerpt" required rows="3"
                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm 
                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                placeholder="Ringkasan singkat tentang artikel..."></textarea>
            </div>

            <!-- Konten -->
            <div class="space-y-2">
              <label for="content" class="text-sm font-medium">Konten Artikel *</label>
              <textarea id="content" name="content" required rows="15"
                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm 
                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                placeholder="Tulis konten artikel lengkap di sini..."></textarea>
            </div>

            <!-- Publikasi -->
            <div class="flex items-center space-x-2">
              <input type="checkbox" id="published" name="published" value="1"
                class="h-5 w-5 rounded border-gray-300 focus:ring-2 focus:ring-primary">
              <label for="published" class="text-sm font-medium">Publikasikan langsung</label>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4 pt-4">
              <button type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-md bg-primary text-white hover:bg-primary/90 
                transition px-4 py-2 text-sm font-medium shadow-sm flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-file-text w-4 h-4 mr-2">
                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                  <path d="M10 9H8"></path>
                  <path d="M16 13H8"></path>
                  <path d="M16 17H8"></path>
                </svg>
                Simpan Artikel
              </button>

              <a href="{{ route('admin.articles.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-md border border-input bg-background 
                hover:bg-accent hover:text-accent-foreground px-4 py-2 text-sm font-medium">
                Batal
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
