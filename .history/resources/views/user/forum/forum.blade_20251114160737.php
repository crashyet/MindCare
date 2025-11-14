@extends('app')

@section('title', 'Dashboard')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8 animate-fade-in">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold mb-2">Forum <span
                                    class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Diskusi</span>
                            </h1>
                            <p class="text-muted-foreground text-lg">Berbagi cerita dan dapatkan dukungan dari komunitas</p>
                        </div>

                        <!-- Wrapper pakai Alpine.js -->
                        <div x-data="{ open: false }">
                          <!-- Tombol trigger -->
                          <button
                            @click="open = true"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium 
                            ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring 
                            focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none 
                            [&_svg]:size-4 [&_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 
                            bg-gradient-hero hover:shadow-medium transition-smooth"
                          >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"
                              class="lucide lucide-plus w-5 h-5 mr-2">
                              <path d="M5 12h14"></path>
                              <path d="M12 5v14"></path>
                            </svg>
                            Buat Diskusi Baru
                          </button>

                          <!-- Popup form -->
                          <div 
                            x-show="open"
                            x-transition
                            @click.self="open = false"
                            class="fixed inset-0 flex items-center justify-center bg-black/60 backdrop-blur-sm z-50"
                          >
                            <div
                              class="relative z-50 grid w-full max-w-lg gap-4 border bg-background p-6 shadow-lg 
                              duration-200 sm:rounded-lg sm:max-w-[600px] animate-in fade-in-0 zoom-in-95"
                            >
                              <!-- Header -->
                              <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                                <h2 class="text-lg font-semibold leading-none tracking-tight">Buat Diskusi Baru</h2>
                                <p class="text-sm text-muted-foreground">Berbagi cerita dan dapatkan dukungan dari komunitas</p>
                              </div>

                              <!-- Form -->
                              <form action="{{ route('forum.store') }}" method="POST" class="space-y-4 mt-4">
                                @csrf
                                <!-- Judul -->
                                <div class="space-y-2">
                                  <label class="text-sm font-medium leading-none" for="title">Judul Diskusi</label>
                                  <input
                                    id="title"
                                    name="title"
                                    type="text"
                                    placeholder="Masukkan judul diskusi..."
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                                    ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none 
                                    focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                  >
                                </div>

                                <!-- Kategori -->
                                <div class="space-y-2">
                                  <label class="text-sm font-medium leading-none" for="category">Kategori</label>
                                  <select
                                    id="category"
                                    name="category" 
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm 
                                    ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none 
                                    focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                  >
                                    <option value="">Pilih kategori</option>
                                    <option value="Kecemasan">Kecemasan</option>
                                    <option value="Stres">Stres</option>
                                    <option value="Depresi">Depresi</option>
                                    <option value="Mindfulness">Mindfulness</option>
                                    <option value="Self-Care">Self-Care</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                  </select>
                                </div>

                                <!-- Isi diskusi -->
                                <div class="space-y-2">
                                  <label class="text-sm font-medium leading-none" for="content">Isi Diskusi</label>
                                  <textarea
                                    id="content"
                                    name="content" 
                                    placeholder="Ceritakan yang ingin Anda diskusikan..."
                                    rows="6"
                                    required
                                    class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 
                                    text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none 
                                    focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                  ></textarea>
                                </div>

                                <!-- Tombol aksi -->
                                <div class="flex justify-end gap-3">
                                  <button
                                    type="button"
                                    @click="open = false"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium 
                                    border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 
                                    transition-colors"
                                  >
                                    Batal
                                  </button>
                                  <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium 
                                    text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero transition-colors"
                                  >
                                    Posting Diskusi
                                  </button>
                                </div>
                              </form>

                              <!-- Tombol close (X) -->
                              <button
                                type="button"
                                @click="open = false"
                                class="absolute right-4 top-4 rounded-sm opacity-70 hover:opacity-100 focus:outline-none 
                                focus:ring-2 focus:ring-ring focus:ring-offset-2 transition-opacity"
                              >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  class="lucide lucide-x h-4 w-4">
                                  <path d="M18 6 6 18"></path>
                                  <path d="m6 6 12 12"></path>
                                </svg>
                                <span class="sr-only">Close</span>
                              </button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-primary-foreground hover:bg-primary/80 cursor-pointer px-4 py-2 bg-gradient-hero transition-smooth">
                            Semua</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kecemasan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Stres</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Depresi</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Mindfulness</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Self-Care</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kesehatan</div>
                    </div>

                    <div class="grid md:grid-cols-4 gap-4">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">{{ $stats['total_forums'] }}</p>
                            <p class="text-sm text-muted-foreground">Total Diskusi</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">{{ $stats['active_users'] }}</p>
                            <p class="text-sm text-muted-foreground">Anggota Aktif</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">45</p>
                            <p class="text-sm text-muted-foreground">Diskusi Hari Ini</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">189</p>
                            <p class="text-sm text-muted-foreground">Balasan Hari Ini</p>
                        </div>
                    </div>
                    <div class="space-y-4">  <!-- Ini akan kasih jarak antar card -->
                      @foreach($forums as $forum)
                        <a href="{{ route('forum.show', $forum->slug) }}" class="block">
                          <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                              style="animation-delay: 0s;">
                              <div class="flex flex-col md:flex-row gap-4">
                                  <div class="flex-1 space-y-3">
                                      <div class="flex items-start gap-3">
                                          <div class="flex-1">
                                              <h3 class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                  {{ $forum->title }}
                                              </h3>
                                              <p class="text-sm text-muted-foreground mb-3 line-clamp-1">{{ $forum->content }}</p>
                                              <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                  <span class="font-medium">{{ $forum->user->name }}</span>
                                                  <span>•</span>
                                                  <span>{{ $forum->created_at->diffForHumans() }}</span>
                                                  <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-primary/5 text-primary border-primary/20">
                                                      {{ $forum->category }}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                      <div class="flex items-center gap-1 text-muted-foreground">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-message-square w-4 h-4">
                                              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                          </svg>
                                          <span class="font-medium">{{ $forum->replies_count }}</span>
                                      </div>
                                      <div class="flex items-center gap-1 text-muted-foreground">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-heart w-4 h-4">
                                              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                          </svg>
                                          <span class="font-medium">{{ $forum->likes_count }}</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </a>
                      @endforeach
                    </div>

                    <!-- <div class="flex justify-center"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:text-accent-foreground h-10 py-2 px-8 hover:bg-muted">Muat
                            Lebih Banyak</button></div> -->
                </div>
            </div>
        </main>
    </div>

@endsection
