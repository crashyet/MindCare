@extends('app')

@section('title', 'Artikel')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8 animate-fade-in">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Artikel <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Kesehatan
                                Mental</span></h1>
                        <p class="text-muted-foreground text-lg">Baca artikel-artikel edukatif seputar kesehatan mental</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-primary-foreground hover:bg-primary/80 cursor-pointer px-4 py-2 bg-gradient-hero transition-smooth">
                            Semua</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Stres</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kecemasan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kesehatan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Mindfulness</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Sosial</div>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                      @foreach ($articles as $article)
                        <div
                          class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                          style="animation-delay: 0s;">
                          <div class="space-y-4">
                            <!-- Kategori dan durasi -->
                            <div class="flex items-start justify-between gap-2">
                              <span
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-primary/10 text-primary hover:bg-primary/20">
                                {{ $article->category }}
                              </span>
                              <div class="flex items-center gap-1 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>{{ $article->read_time ?? '5 menit' }}</span>
                              </div>
                            </div>

                            <!-- Judul dan ringkasan -->
                            <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">
                              {{ $article->title }}
                            </h3>
                            <p class="text-muted-foreground line-clamp-3">
                              {{ $article->excerpt }}
                            </p>

                            <!-- Info bawah -->
                            <div class="pt-4 border-t border-border space-y-3">
                              <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center gap-2 text-muted-foreground">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user w-4 h-4">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                  </svg>
                                  <span>{{ $article->author_name }}</span>
                                </div>
                                <span class="text-muted-foreground text-xs">
                                  {{ $article->created_at->diffForHumans() }}
                                </span>
                              </div>

                              <!-- Views dan tombol -->
                              <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1 text-sm">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-heart w-4 h-4 text-primary">
                                    <path
                                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                  </svg>
                                  <span class="font-medium">{{ $article->likes ?? 0 }}</span>
                                </div>
                                <a href="{{ route('articles.show', ['slug' => $article->slug]) }}"
                                  class="inline-flex items-center justify-center gap-2 text-sm font-medium text-primary-foreground bg-gradient-hero hover:bg-primary/90 hover:shadow-medium transition-smooth h-9 rounded-md px-3">
                                  Baca
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>

                </div>
            </div>
        </main>
    </div>

@endsection
