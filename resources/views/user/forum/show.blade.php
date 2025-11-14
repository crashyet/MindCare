@extends('app')

@section('title', 'Dashboard')

@section('content')

<div class="min-h-screen bg-background">

  <!-- <x-header-admin></x-header-admin> -->
  <x-sidebar-user></x-sidebar-user>

  <div class="p-4 md:p-8">
    <div class="max-w-4xl mx-auto space-y-6 animate-fade-in">
      <button onclick="window.location.href='{{ route('forum.index') }}'" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4">
          <path d="m12 19-7-7 7-7"></path>
          <path d="M19 12H5"></path>
        </svg>
        Kembali ke Forum
      </button>

      <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 shadow-soft">
        <div class="space-y-6">
          <div class="space-y-4">
            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">{{ $forum->category }}</div>
            <h1 class="text-3xl font-bold leading-tight">{{ $forum->title }}</h1>
            <div class="flex items-center gap-3"><span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span class="flex h-full w-full items-center justify-center rounded-full bg-gradient-hero text-white">{{ strtoupper(substr($forum->user->name, 0, 1)) }}</span></span>
              <div>
                <p class="font-medium">{{ $forum->user->name }}</p>
                <p class="text-sm text-muted-foreground">{{ $forum->created_at->diffForHumans() }}</p>
              </div>
            </div>
          </div>
          <div class="prose max-w-none">
            <p class="text-muted-foreground whitespace-pre-line leading-relaxed">{{ $forum->content }}</p>
          </div>

          <!-- <div class="flex items-center gap-3 pt-4 border-t"><button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-4 h-4">
                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
              </svg>24</button><button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-4 h-4">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>{{ $totalReplies }} Balasan</button><button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 w-4 h-4">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
              </svg>Bagikan
            </button>
          </div> -->

          <div class="flex items-center gap-3 pt-4 border-t">

            {{-- Tombol Like --}}
            <div 
              x-data="{
                liked: {{ $forum->isLikedBy(auth()->user()) ? 'true' : 'false' }},
                count: {{ $forum->likes->count() }},
                toggleLike() {
                  fetch('{{ route('like.toggle') }}', {
                    method: 'POST',
                    headers: {
                      'X-CSRF-TOKEN': '{{ csrf_token() }}',
                      'Content-Type': 'application/json',
                      'Accept': 'application/json',
                    },
                    body: JSON.stringify({ forum_id: {{ $forum->id }} })
                  })
                  .then(res => res.json())
                  .then(data => {
                    this.liked = data.liked;
                    this.count = data.count;
                  })
                  .catch(err => console.error(err));
                }
              }"
              class="flex items-center gap-2"
            >
              <button 
                @click.prevent="toggleLike"
                :class="liked 
                  ? 'bg-primary text-primary-foreground hover:bg-primary/90' 
                  : 'border border-input bg-background hover:bg-accent hover:text-accent-foreground'"
                class="inline-flex items-center gap-2 h-9 rounded-md px-3 text-sm transition-all duration-200"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="lucide lucide-heart w-4 h-4 transition-all duration-200"
                    :class="liked ? 'fill-current text-white scale-110' : 'scale-100'">
                  <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                </svg>
                <span x-text="count">0</span>
              </button>
            </div>


            {{-- Tombol Balasan --}}
            <button 
              class="inline-flex items-center gap-2 border border-input bg-background 
                    hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-sm"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-4 h-4">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>
              {{ $totalReplies }} Balasan
            </button>

            {{-- Tombol Bagikan --}}
            <div x-data="{ open: false }" class="relative">
              <button 
                @click="open = !open"
                class="inline-flex items-center gap-2 border border-input bg-background 
                      hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-sm"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 w-4 h-4">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
              </svg>
                Bagikan
              </button>

              {{-- Dropdown menu share --}}
              <div 
                x-show="open"
                @click.away="open = false"
                class="absolute right-0 mt-2 w-48 rounded-md border bg-card shadow-lg z-50"
              >
                @php
                  $shareUrl = urlencode(route('forum.show', $forum->slug));
                  $shareText = urlencode($forum->title);
                @endphp

                <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" 
                  target="_blank"
                  class="flex items-center gap-2 px-3 py-2 hover:bg-accent text-sm"
                >
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#25D366">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                  </svg> WhatsApp
                </a>

                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}" 
                  target="_blank"
                  class="flex items-center gap-2 px-3 py-2 hover:bg-accent text-sm"
                >
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#1DA1F2">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                      </svg> X (Twitter)
                </a>

                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" 
                  target="_blank"
                  class="flex items-center gap-2 px-3 py-2 hover:bg-accent text-sm"
                >
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#1877F2">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                      </svg> Facebook
                </a>

                <button 
                  onclick="navigator.clipboard.writeText('{{ route('forum.show', $forum->slug) }}'); 
                          alert('Link berhasil disalin! ✅');"
                  class="w-full text-left flex items-center gap-2 px-3 py-2 hover:bg-accent text-sm"
                >
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                      </svg> Salin Link
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-4">
        <h2 class="text-2xl font-bold">{{ $totalReplies }} Balasan</h2>

        @foreach($forum->replies as $reply)
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft">
            <div class="space-y-4">
              <div class="flex items-start gap-3"><span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span class="flex h-full w-full items-center justify-center rounded-full bg-muted">{{ strtoupper(substr($reply->user->name, 0, 1)) }}</span></span>
                <div class="flex-1">
                  <div class="flex items-center gap-2 mb-1">
                    <p class="font-medium">{{ $reply->user->name }}</p><span class="text-sm text-muted-foreground">•</span>
                    <p class="text-sm text-muted-foreground">{{ $reply->created_at->diffForHumans() }}</p>
                  </div>
                  <p class="text-muted-foreground whitespace-pre-line leading-relaxed">{{ $reply->content }}</p>
                </div>
              </div>

              <div class="flex items-center gap-2 pl-12">
                {{-- Tombol Like Reply --}}
                <div 
                  x-data="{
                    liked: {{ $reply->isLikedBy(auth()->user()) ? 'true' : 'false' }},
                    count: {{ $reply->likes->count() }},
                    toggleLike() {
                      fetch('{{ route('reply.like.toggle') }}', {
                        method: 'POST',
                        headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}',
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                        },
                        body: JSON.stringify({ reply_id: {{ $reply->id }} })
                      })
                      .then(res => res.json())
                      .then(data => {
                        this.liked = data.liked;
                        this.count = data.count;
                      })
                      .catch(err => console.error(err));
                    }
                  }"
                  class="flex items-center gap-2"
                >
                  <button 
                    @click.prevent="toggleLike"
                    :class="liked 
                      ? 'bg-primary text-primary-foreground hover:bg-primary/90' 
                      : 'hover:bg-accent hover:text-accent-foreground'"
                    class="inline-flex items-center gap-2 h-8 rounded-md px-2.5 text-xs transition-all duration-200"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-heart w-4 h-4 transition-all duration-200"
                        :class="liked ? 'fill-current text-white scale-110' : 'scale-100'">
                      <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                    </svg>
                    <span x-text="count"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <form 
        action="{{ route('reply.store', $forum->id) }}" 
        method="POST" 
        class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft"
      >
        @csrf
        <div class="space-y-4">
          <h3 class="font-semibold">Tambahkan Balasan</h3>
          
          <textarea 
            name="content"
            class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm 
                  ring-offset-background placeholder:text-muted-foreground 
                  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring 
                  focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 
                  min-h-[120px]" 
            placeholder="Tulis balasan Anda di sini..." 
            required
          ></textarea>

          <div class="flex justify-between items-center">
            <p class="text-sm text-muted-foreground">
              Pastikan balasan Anda sopan dan mendukung
            </p>
            <button 
              type="submit"
              class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium 
                    ring-offset-background transition-colors focus-visible:outline-none 
                    focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 
                    disabled:pointer-events-none disabled:opacity-50 
                    text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero gap-2"
            >
              <svg xmlns="http://www.w3.org/2000/svg" 
                  width="24" height="24" viewBox="0 0 24 24" fill="none" 
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                  class="lucide lucide-send w-4 h-4">
                <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                <path d="m21.854 2.147-10.94 10.939"></path>
              </svg>
              Kirim Balasan
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection