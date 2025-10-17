@extends('app')

@section('title', 'MindCare')

@section('content')

<div class="min-h-screen">
  <nav class="fixed top-0 left-0 right-0 z-50 bg-card/80 backdrop-blur-md border-b border-border shadow-soft">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16 md:h-20"><a class="flex items-center gap-2 group" href="/">
          <div class="w-10 h-10 rounded-full bg-gradient-hero flex items-center justify-center shadow-soft group-hover:shadow-medium transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-primary-foreground">
                                  <img src="{{ asset('images/logo.png') }}" alt="MindCare Logo">

            </svg></div><span class="text-xl md:text-2xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">MindCare</span>
        </a>
        <div class="hidden md:flex items-center gap-8"><a href="/" class="text-foreground hover:text-primary transition-smooth font-medium">Beranda</a><a href="#about" class="text-foreground hover:text-primary transition-smooth font-medium">Tentang</a><a href="#features" class="text-foreground hover:text-primary transition-smooth font-medium">Fitur</a><a href="#goals" class="text-foreground hover:text-primary transition-smooth font-medium">Tujuan</a></div>
        <div class="hidden md:flex items-center gap-4">
          <button onclick="window.location.href='/auth'" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:text-accent-foreground h-10 px-4 py-2 hover:bg-primary/10">Login</button>
          <button onclick="window.location.href='/auth'" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero hover:shadow-hover transition-smooth">Mulai Tes Sekarang</button></div><button class="md:hidden p-2 rounded-lg hover:bg-muted transition-smooth"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6">
            <line x1="4" x2="20" y1="12" y2="12"></line>
            <line x1="4" x2="20" y1="6" y2="6"></line>
            <line x1="4" x2="20" y1="18" y2="18"></line>
          </svg></button>
      </div>
    </div>
  </nav>
  <section class="min-h-screen flex items-center justify-center px-4 pt-20 md:pt-0">
    <div class="container mx-auto">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left space-y-6 animate-fade-in">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-accent shadow-soft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-4 h-4 text-accent-foreground">
              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
            </svg><span class="text-sm font-medium text-accent-foreground">SDGs 3: Kehidupan Sehat dan Kesejahteraan</span></div>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">Kesehatan Mentalmu Sama Pentingnya <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Dengan Fisikmu 💙</span></h1>
          <p class="text-lg md:text-xl text-muted-foreground max-w-2xl">Bangun kesejahteraan mentalmu bersama MindCare. Temukan dukungan, edukasi, dan komunitas yang peduli pada kesehatan mental Anda.</p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start"><button onclick="window.location.href='/auth'" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 rounded-md bg-gradient-hero hover:shadow-hover transition-smooth text-base md:text-lg h-12 md:h-14 px-6 md:px-8">Coba Tes Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg></button><button onclick="scrollToAbout()" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-input bg-background hover:text-accent-foreground rounded-md border-2 hover:bg-primary/5 text-base md:text-lg h-12 md:h-14 px-6 md:px-8">Pelajari Lebih Lanjut</button></div>
        </div>
        <div class="relative animate-slide-up lg:animate-float">
          <div class="absolute -inset-4 bg-gradient-hero opacity-20 blur-3xl rounded-full"></div>
          <img src="{{ asset('images/1.jpg') }}" alt="" class="relative rounded-3xl shadow-medium w-full h-auto">
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="py-20 md:py-32 px-4 bg-gradient-accent">
    <div class="container mx-auto">
      <div class="text-center mb-16 animate-fade-in">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Tentang <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">MindCare</span></h2>
        <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">Kami hadir untuk membantu masyarakat menjaga kesehatan mental melalui edukasi, komunitas, dan teknologi yang mudah diakses.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0s;">
          <div class="w-16 h-16 rounded-full bg-gradient-card flex items-center justify-center mb-6 shadow-soft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-8 h-8 text-primary">
              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
            </svg></div>
          <h3 class="text-xl font-semibold mb-4">Empati &amp; Dukungan</h3>
          <p class="text-muted-foreground">Kami memahami bahwa setiap perjalanan kesehatan mental adalah unik dan berharga</p>
        </div>
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0.1s;">
          <div class="w-16 h-16 rounded-full bg-gradient-card flex items-center justify-center mb-6 shadow-soft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg></div>
          <h3 class="text-xl font-semibold mb-4">Komunitas Peduli</h3>
          <p class="text-muted-foreground">Terhubung dengan orang-orang yang saling mendukung dalam perjalanan mereka</p>
        </div>
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0.2s;">
          <div class="w-16 h-16 rounded-full bg-gradient-card flex items-center justify-center mb-6 shadow-soft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-8 h-8 text-primary">
              <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
              <path d="M9 18h6"></path>
              <path d="M10 22h4"></path>
            </svg></div>
          <h3 class="text-xl font-semibold mb-4">Edukasi Berkelanjutan</h3>
          <p class="text-muted-foreground">Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
        </div>
      </div>
    </div>
  </section>
  <section id="features" class="py-20 md:py-32 px-4">
    <div class="container mx-auto">
      <div class="text-center mb-16 animate-fade-in">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Fitur <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Unggulan</span></h2>
        <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">Platform lengkap yang dirancang untuk mendukung perjalanan kesehatan mental Anda</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-hover transition-smooth animate-slide-up border border-border hover:border-primary/30" style="animation-delay: 0s;">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-primary-light to-primary p-4 mb-6 shadow-soft group-hover:scale-110 transition-smooth"><img src="{{ asset('images/3.1.png') }}" alt="Tes Kesehatan Mental" class="w-full h-full object-contain"></div>
          <h3 class="text-xl font-semibold mb-4">Tes Kesehatan Mental</h3>
          <p class="text-muted-foreground">Evaluasi kondisi mental Anda dengan tes yang telah dirancang oleh profesional</p>
        </div>
        <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-hover transition-smooth animate-slide-up border border-border hover:border-primary/30" style="animation-delay: 0.1s;">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-secondary-light to-secondary p-4 mb-6 shadow-soft group-hover:scale-110 transition-smooth"><img src="{{ asset('images/3.2.png') }}" alt="Forum Chat &amp; Dukungan" class="w-full h-full object-contain"></div>
          <h3 class="text-xl font-semibold mb-4">Forum Chat &amp; Dukungan</h3>
          <p class="text-muted-foreground">Berbagi cerita dan mendapatkan dukungan dari komunitas yang peduli</p>
        </div>
        <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-hover transition-smooth animate-slide-up border border-border hover:border-primary/30" style="animation-delay: 0.2s;">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-accent-light to-accent p-4 mb-6 shadow-soft group-hover:scale-110 transition-smooth"><img src="{{ asset('images/3.3.png') }}" alt="Artikel &amp; Edukasi" class="w-full h-full object-contain"></div>
          <h3 class="text-xl font-semibold mb-4">Artikel &amp; Edukasi</h3>
          <p class="text-muted-foreground">Akses berbagai artikel dan materi edukasi seputar kesehatan mental</p>
        </div>
        <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-hover transition-smooth animate-slide-up border border-border hover:border-primary/30" style="animation-delay: 0.3s;">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-primary to-accent p-4 mb-6 shadow-soft group-hover:scale-110 transition-smooth"><img src="{{ asset('images/3.4.png') }}" alt="Chatbot Pendamping" class="w-full h-full object-contain"></div>
          <h3 class="text-xl font-semibold mb-4">Chatbot Pendamping</h3>
          <p class="text-muted-foreground">Asisten AI yang siap membantu dan mendengarkan Anda kapan saja</p>
        </div>
        <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-hover transition-smooth animate-slide-up border border-border hover:border-primary/30" style="animation-delay: 0.4s;">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-secondary to-primary p-4 mb-6 shadow-soft group-hover:scale-110 transition-smooth"><img src="{{ asset('images/3.5.png') }}" alt="Dashboard Personal" class="w-full h-full object-contain"></div>
          <h3 class="text-xl font-semibold mb-4">Dashboard Personal</h3>
          <p class="text-muted-foreground">Pantau perkembangan kesehatan mental Anda melalui grafik dan statistik</p>
        </div>
      </div>
    </div>
  </section>
  <section id="goals" class="py-20 md:py-32 px-4 bg-gradient-card">
    <div class="container mx-auto">
      <div class="text-center mb-16 animate-fade-in">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Tujuan <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Kami</span></h2>
        <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">Bersama membangun masa depan yang lebih sehat secara mental</p>
      </div>
      <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0s;">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-7 h-7 text-primary">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
              </svg></div>
            <div>
              <h3 class="text-xl font-semibold mb-3">Meningkatkan Kesadaran</h3>
              <p class="text-muted-foreground">Meningkatkan kesadaran masyarakat tentang pentingnya menjaga kesehatan mental sebagai bagian dari kesehatan holistik</p>
            </div>
          </div>
        </div>
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0.1s;">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-secondary/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-7 h-7 text-secondary">
                <path d="M12 7v14"></path>
                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
              </svg></div>
            <div>
              <h3 class="text-xl font-semibold mb-3">Akses Edukasi Mudah</h3>
              <p class="text-muted-foreground">Memberikan akses mudah ke edukasi dan informasi kesehatan mental yang terpercaya dan berbasis sains</p>
            </div>
          </div>
        </div>
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0.2s;">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-accent">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg></div>
            <div>
              <h3 class="text-xl font-semibold mb-3">Komunitas Saling Mendukung</h3>
              <p class="text-muted-foreground">Menciptakan ruang aman dimana setiap orang dapat berbagi pengalaman dan mendapatkan dukungan</p>
            </div>
          </div>
        </div>
        <div class="bg-card rounded-2xl p-8 shadow-soft hover:shadow-medium transition-smooth animate-slide-up" style="animation-delay: 0.3s;">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-7 h-7 text-primary">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                <polyline points="16 7 22 7 22 13"></polyline>
              </svg></div>
            <div>
              <h3 class="text-xl font-semibold mb-3">Layanan Berbasis Data</h3>
              <p class="text-muted-foreground">Menyediakan layanan yang didukung data dan teknologi, namun tetap penuh empati dan humanis</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-20 md:py-32 px-4">
    <div class="container mx-auto">
      <div class="max-w-5xl mx-auto bg-gradient-hero rounded-3xl shadow-medium overflow-hidden">
        <div class="grid md:grid-cols-2 gap-8 items-center p-8 md:p-12">
          <div class="order-2 md:order-1 space-y-6 animate-fade-in">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-card shadow-soft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list w-4 h-4 text-primary">
                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                <path d="M12 11h4"></path>
                <path d="M12 16h4"></path>
                <path d="M8 11h.01"></path>
                <path d="M8 16h.01"></path>
              </svg><span class="text-sm font-medium text-foreground">Tes Gratis &amp; Anonim</span></div>
            <h2 class="text-3xl md:text-4xl font-bold text-primary-foreground">Coba Tes Kesehatan Mental Singkat</h2>
            <p class="text-lg text-primary-foreground/90">Kenali kondisi kesehatan mental Anda lebih baik melalui tes yang dirancang oleh profesional. Hasilnya dapat membantu Anda memahami diri sendiri lebih dalam.</p>
            <div class="flex flex-col sm:flex-row gap-4"><button onclick="window.location.href='/auth'" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 bg-card text-foreground hover:bg-card/90 shadow-soft hover:shadow-medium transition-smooth">Mulai Tes<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg></button>
              <p class="text-sm text-primary-foreground/80 flex items-center">* Login diperlukan untuk akses tes lengkap</p>
            </div>
          </div>
          <div class="order-1 md:order-2 flex justify-center animate-float">
            <div class="relative">
              <div class="absolute -inset-4 bg-card/20 blur-2xl rounded-full"></div><img src="{{ asset('images/2.png') }}" alt="Person thinking" class="relative w-64 h-64 md:w-80 md:h-80 object-contain">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-gradient-accent border-t border-border">
    <div class="container mx-auto px-4 py-12 md:py-16">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <div class="md:col-span-1">
          <div class="flex items-center gap-2 mb-4">
            <div class="w-10 h-10 rounded-full bg-gradient-hero flex items-center justify-center shadow-soft">
              <img src="{{ asset('images/logo.png') }}" alt="">
            </div><span class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">MindCare</span>
          </div>
          <p class="text-muted-foreground mb-4">Untuk kesehatan mental yang lebih baik.</p>
          <p class="text-sm text-muted-foreground">SDGs 3: Kehidupan Sehat dan Kesejahteraan</p>
        </div>
        <div>
          <h3 class="font-semibold mb-4 text-foreground">Navigasi Cepat</h3>
          <ul class="space-y-2">
            <li><a href="/" class="text-muted-foreground hover:text-primary transition-smooth">Beranda</a></li>
            <li><a href="#about" class="text-muted-foreground hover:text-primary transition-smooth">Tentang Kami</a></li>
            <li><a href="#features" class="text-muted-foreground hover:text-primary transition-smooth">Fitur</a></li>
            <li><a href="#goals" class="text-muted-foreground hover:text-primary transition-smooth">Tujuan</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-semibold mb-4 text-foreground">Sumber Daya</h3>
          <ul class="space-y-2">
            <li><a class="text-muted-foreground hover:text-primary transition-smooth" href="/dashboard">Artikel</a></li>
            <li><a class="text-muted-foreground hover:text-primary transition-smooth" href="/dashboard">Forum Diskusi</a></li>
            <li><a class="text-muted-foreground hover:text-primary transition-smooth" href="/dashboard">Tes Mental Health</a></li>
            <li><a class="text-muted-foreground hover:text-primary transition-smooth" href="/dashboard">Chatbot</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-semibold mb-4 text-foreground">Kontak &amp; Sosial Media</h3>
          <ul class="space-y-3">
            <li class="flex items-center gap-2 text-muted-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg><span class="text-sm">info@mindcare.id</span></li>
            <li class="flex items-center gap-2 text-muted-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg><span class="text-sm">+62 812-3456-7890</span></li>
            <li class="flex items-center gap-2 text-muted-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4">
                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg><span class="text-sm">Jakarta, Indonesia</span></li>
          </ul>
        </div>
      </div>
      <div class="border-t border-border pt-8 text-center">
        <p class="text-muted-foreground text-sm">© 2025 MindCare. Semua hak cipta dilindungi. Dibuat dengan <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart inline w-4 h-4 text-destructive">
            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
          </svg> untuk kesehatan mental yang lebih baik.</p>
      </div>
    </div>
  </footer>
</div>

<script>
  function scrollToAbout() {
    const element = document.getElementById('about');
    element.scrollIntoView({ behavior: 'smooth' });
  }
</script>

@endsection