@extends('app')

@section('title', $article->title)

@section('content')

<div class="min-h-screen bg-background">

  <!-- <x-header-admin></x-header-admin> -->
  <x-sidebar-user></x-sidebar-user>

  <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
      <div class="max-w-4xl mx-auto space-y-6 animate-fade-in">
        <button onclick="window.history.back()" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path>
          </svg>
          Kembali ke Artikel
        </button>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 shadow-soft">
          <div class="space-y-6">
            <div class="space-y-4">
              <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">{{ $article->category }}</div>
              <h1 class="text-3xl md:text-4xl font-bold leading-tight">{{ $article->title }}</h1>
              <div class="flex flex-wrap items-center gap-4 text-muted-foreground">
                <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg><span class="font-medium">{{ $article->author_name }}</span></div><span>•</span>
                <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg><span>{{ $article->read_time ?? '5 menit' }}</span></div><span>•</span><span>{{ $article->created_at->diffForHumans() }}</span>
              </div>
            </div>
            <div class="flex items-center gap-3 pt-4 border-t">
              <button id="likeBtn" data-slug="{{ $article->slug }}" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-4 h-4">
                  <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                </svg>
                <span id="likeCount">{{ $article->likes }}</span>
              </button>
              <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark w-4 h-4">
                  <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                </svg>Simpan</button>
              
              <!-- Share Button with Dropdown -->
              <div class="relative inline-block" id="shareDropdown">
                <button id="shareBtn" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 w-4 h-4">
                    <circle cx="18" cy="5" r="3"></circle>
                    <circle cx="6" cy="12" r="3"></circle>
                    <circle cx="18" cy="19" r="3"></circle>
                    <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                    <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                  </svg>
                  Bagikan
                </button>
                
                <!-- Dropdown Menu -->
                <div id="shareMenu" class="hidden absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                  <div class="py-1" role="menu">
                    <button class="share-option flex items-center gap-3 w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-platform="whatsapp">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="#25D366">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                      </svg>
                      <span>WhatsApp</span>
                    </button>
                    <button class="share-option flex items-center gap-3 w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-platform="facebook">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="#1877F2">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                      </svg>
                      <span>Facebook</span>
                    </button>
                    <button class="share-option flex items-center gap-3 w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-platform="twitter">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="#1DA1F2">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                      </svg>
                      <span>Twitter</span>
                    </button>
                    <button class="share-option flex items-center gap-3 w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-platform="copy">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                      </svg>
                      <span>Salin Link</span>
                    </button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 shadow-soft">
          <div id="articleContent" class="prose prose-lg max-w-none
              prose-headings:font-bold prose-headings:text-foreground
              prose-h2:text-2xl prose-h2:mt-8 prose-h2:mb-4
              prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3
              prose-p:text-muted-foreground prose-p:leading-relaxed prose-p:mb-4
              prose-ul:text-muted-foreground prose-ul:my-4
              prose-li:mb-2
              [&>p]:mb-6 [&>p]:leading-loose [&>p]:text-justify">
            
            {!! $article->content !!}
            
          </div>
        </div>
        <div class="pt-8">
          <h2 class="text-2xl font-bold mb-6">Artikel Terkait</h2>
          <div class="grid md:grid-cols-2 gap-6">
            @foreach($related as $relatedArticle)
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 cursor-pointer hover:shadow-medium transition-smooth">
              <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary/10 text-primary">{{ $relatedArticle->category }}</div>
              <h3 class="font-semibold mb-2 hover:text-primary transition-smooth">{{ $relatedArticle->title }}</h3>
              <div class="flex items-center gap-2 text-sm text-muted-foreground">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span>{{ $relatedArticle->read_time ?? '5 menit' }}</span>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<!-- Toast Notification -->
<div id="toast" class="fixed bottom-4 right-4 bg-gray-900 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-20 opacity-0 transition-all duration-300 z-50"></div>

<style>
  #toast.show {
    transform: translateY(0);
    opacity: 1;
  }
  
  /* Auto-format untuk content yang plain text */
  #articleContent {
    white-space: pre-line;
    line-height: 1.8;
  }
  
  #articleContent p {
    margin-bottom: 1.5rem !important;
    text-align: justify;
  }
</style>

<script>
// Auto-format content jika plain text
document.addEventListener('DOMContentLoaded', function() {
    const content = document.getElementById('articleContent');
    const text = content.textContent || content.innerText;
    
    // Cek apakah content plain text (gak ada tag HTML)
    if (!content.querySelector('p, h2, h3, ul, ol')) {
        // Split by nomor list atau paragraf panjang
        const formatted = text
            .split(/(\d+\.\s)/)
            .filter(part => part.trim())
            .map(part => {
                if (/^\d+\.\s/.test(part)) {
                    return `<h3 class="font-bold text-lg mt-6 mb-3">${part.trim()}</h3>`;
                } else if (part.length > 100) {
                    // Pisah paragraf panjang jadi beberapa
                    const sentences = part.match(/[^.!?]+[.!?]+/g) || [part];
                    let paragraphs = [];
                    let current = '';
                    
                    sentences.forEach(sentence => {
                        current += sentence;
                        if (current.length > 300) {
                            paragraphs.push(`<p class="mb-6">${current.trim()}</p>`);
                            current = '';
                        }
                    });
                    
                    if (current) {
                        paragraphs.push(`<p class="mb-6">${current.trim()}</p>`);
                    }
                    
                    return paragraphs.join('');
                }
                return `<p class="mb-6">${part.trim()}</p>`;
            })
            .join('');
        
        content.innerHTML = formatted;
    }
});

// CSRF Token
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

// Like Button - Simple Version (tanpa tracking)
const likeBtn = document.getElementById('likeBtn');
const likeCount = document.getElementById('likeCount');
const articleSlug = likeBtn.dataset.slug;

likeBtn.addEventListener('click', async function() {
    try {
        const response = await fetch(`/artikel/${articleSlug}/like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
        });
        
        const data = await response.json();
        
        if(data.success) {
            likeCount.textContent = data.likes;
            showToast('❤️ Like ditambahkan!');
        }
    } catch (error) {
        console.error('Error:', error);
        showToast('Terjadi kesalahan');
    }
});

// Share Button Functionality
const shareBtn = document.getElementById('shareBtn');
const shareMenu = document.getElementById('shareMenu');
const shareDropdown = document.getElementById('shareDropdown');

shareBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    shareMenu.classList.toggle('hidden');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!shareDropdown.contains(e.target)) {
        shareMenu.classList.add('hidden');
    }
});

// Share Options
document.querySelectorAll('.share-option').forEach(option => {
    option.addEventListener('click', function(e) {
        const platform = this.dataset.platform;
        const url = window.location.href;
        const title = document.querySelector('h1').textContent;
        
        let shareUrl = '';
        
        switch(platform) {
            case 'whatsapp':
                shareUrl = `https://wa.me/?text=${encodeURIComponent(title + ' - ' + url)}`;
                window.open(shareUrl, '_blank');
                showToast('Membuka WhatsApp...');
                break;
            case 'facebook':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                window.open(shareUrl, '_blank', 'width=600,height=400');
                showToast('Membuka Facebook...');
                break;
            case 'twitter':
                shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`;
                window.open(shareUrl, '_blank', 'width=600,height=400');
                showToast('Membuka Twitter...');
                break;
            case 'copy':
                navigator.clipboard.writeText(url).then(() => {
                    showToast('✅ Link berhasil disalin!');
                }).catch(() => {
                    showToast('❌ Gagal menyalin link');
                });
                break;
        }
        
        shareMenu.classList.add('hidden');
    });
});

// Toast Notification Function
function showToast(message) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}
</script>

@endsection