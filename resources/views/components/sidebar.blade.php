@php
use Illuminate\Support\Facades\Auth;
@endphp


<!-- ===== Header (Mobile) ===== -->
<header class="lg:hidden fixed top-0 left-0 right-0 z-50 bg-card border-b border-border shadow-soft">
  <div class="flex items-center justify-between px-4 h-16">
    <div class="flex items-center gap-2">
      <div class="w-8 h-8 rounded-full bg-gradient-hero flex items-center juxxstify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-heart w-5 h-5 text-primary-foreground">
          <path
            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3
               c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 
               0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
          </path>
        </svg>
      </div>
      <span class="text-lg font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
        MindCare Admin
      </span>
    </div>

    <!-- Tombol Menu Mobile -->
    <button id="menuToggle"
      class="p-2 rounded-lg hover:bg-muted transition-smooth focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-menu w-6 h-6">
        <line x1="4" x2="20" y1="12" y2="12"></line>
        <line x1="4" x2="20" y1="6" y2="6"></line>
        <line x1="4" x2="20" y1="18" y2="18"></line>
      </svg>
    </button>
  </div>
</header>

<!-- ===== Sidebar ===== -->
<aside
  id="sidebar"
  class="fixed top-0 left-0 h-full bg-sidebar border-r border-sidebar-border shadow-medium z-40 
         transition-transform duration-300 -translate-x-full lg:translate-x-0 w-64"
>
  <div class="flex flex-col h-full">
    <!-- Header Sidebar -->
    <div class="hidden lg:flex items-center gap-2 p-6 border-b border-sidebar-border">
      <div class="w-10 h-10 rounded-full bg-gradient-hero flex items-center justify-center shadow-soft">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          fill="currentColor" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-heart w-6 h-6 text-primary-foreground">
          <img src="{{ asset('images/logo.png') }}" alt="">
        </svg>
      </div>
      <div>
        <span
          class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent block">
          MindCare
        </span>
        <span class="text-xs text-muted-foreground">Admin Panel</span>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 p-4 space-y-2 overflow-y-auto mt-16 lg:mt-0">
      <a class="{{ request()->is('admin') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-layout-dashboard w-5 h-5">
          <rect width="7" height="9" x="3" y="3" rx="1"></rect>
          <rect width="7" height="5" x="14" y="3" rx="1"></rect>
          <rect width="7" height="9" x="14" y="12" rx="1"></rect>
          <rect width="7" height="5" x="3" y="16" rx="1"></rect>
        </svg>
        <span class="text-sm">Dashboard</span>
      </a>

      <a class="{{ request()->is('admin/users') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/users">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-users w-5 h-5">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
          <circle cx="9" cy="7" r="4"></circle>
          <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
        </svg>
        <span class="text-sm">Manajemen Pengguna</span>
      </a>
        
      <a class="{{ request()->is('admin/artikel') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/artikel">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-book-open w-5 h-5">
          <path d="M12 7v14"></path>
          <path
            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
          </path>
        </svg>
        <span class="text-sm">Manajemen Artikel</span>
      </a>

      <!-- <a class="{{ request()->is('admin/edukasi') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/edukasi"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-graduation-cap w-5 h-5">
          <path
            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
          </path>
          <path d="M22 10v6"></path>
          <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
        </svg><span class="text-sm">Manajemen Edukasi</span>
      </a> -->
      
      <a class="{{ request()->is('admin/forum') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/forum"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-message-square w-5 h-5">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg><span class="text-sm">Manajemen Forum</span>
      </a>
      
      <a class="{{ request()->is('admin/tes') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/tes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-clipboard-list w-5 h-5">
          <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
          <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
          <path d="M12 11h4"></path>
          <path d="M12 16h4"></path>
          <path d="M8 11h.01"></path>
          <path d="M8 16h.01"></path>
        </svg><span class="text-sm">Manajemen Tes</span>
      </a>
      
      <a class="{{ request()->is('admin/chatbot') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/chatbot"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-bot w-5 h-5">
          <path d="M12 8V4H8"></path>
          <rect width="16" height="12" x="4" y="8" rx="2"></rect>
          <path d="M2 14h2"></path>
          <path d="M20 14h2"></path>
          <path d="M15 13v2"></path>
          <path d="M9 13v2"></path>
        </svg><span class="text-sm">Chatbot Manager</span>
      </a>
      
      <a class="{{ request()->is('admin/reports') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
        href="/admin/reports"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chart-column w-5 h-5">
          <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
          <path d="M18 17V9"></path>
          <path d="M13 17V5"></path>
          <path d="M8 17v-3"></path>
        </svg><span class="text-sm">Laporan &amp; Statistik</span>
      </a>
    </nav>

    <!-- Footer -->
    <div class="p-4 border-t border-sidebar-border space-y-3">
      <button
        class="w-full flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-sidebar-accent transition-smooth"
        type="button"
      >
        <span class="relative flex items-center justify-center shrink-0 overflow-hidden rounded-full w-10 h-10 bg-primary">
          <div class="flex items-center justify-center aspect-square h-full w-full text-foregroud">@if (Auth::check())
    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
@else
    G
@endif

          </div>
        </span>
        <div class="flex-1 text-left">
          @if (Auth::check())
    <p class="text-sm font-medium text-sidebar-foreground">{{ Auth::user()->name }}</p>
    <p class="text-xs text-muted-foreground">{{ Auth::user()->email }}</p>
@else
    <p class="text-sm font-medium text-sidebar-foreground">Guest</p>
    <p class="text-xs text-muted-foreground">guest@example.com</p>
@endif

        </div>
      </button>

      <!-- Tombol Dark Mode -->
      <button
        id="darkModeToggle"
        class="inline-flex items-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background 
               transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring 
               focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground 
               h-10 px-4 py-2 w-full justify-start gap-3"
      >
        <svg id="darkIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-moon w-6 h-6">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>
        <span id="darkLabel">Mode Gelap</span>
        <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit"
        class="inline-flex items-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-log-out w-5 h-5">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" x2="9" y1="12" y2="12"></line>
        </svg>
        <span>Logout</span>
    </button>
</form>
      </button>
    </div>
  </div>
</aside>

<!-- ===== Overlay (untuk mobile) ===== -->
<div id="overlay" class="fixed inset-0 bg-black/50 z-30 hidden lg:hidden transition-opacity duration-300"></div>

<!-- ===== JavaScript ===== -->
<script>
  const html = document.documentElement;
  const toggleDark = document.getElementById("darkModeToggle");
  const icon = document.getElementById("darkIcon");
  const label = document.getElementById("darkLabel");
  const sidebar = document.getElementById("sidebar");
  const menuToggle = document.getElementById("menuToggle");
  const overlay = document.getElementById("overlay");

  // === DARK MODE ===
  const storedTheme = localStorage.getItem("theme");
  const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

  function setTheme(dark) {
    if (dark) {
      html.classList.add("dark");
      localStorage.setItem("theme", "dark");
      label.textContent = "Mode Terang";
    } else {
      html.classList.remove("dark");
      localStorage.setItem("theme", "light");
      label.textContent = "Mode Gelap";
    }
  }

  setTheme(storedTheme === "dark" || (!storedTheme && systemPrefersDark));

  toggleDark.addEventListener("click", () => {
    setTheme(!html.classList.contains("dark"));
  });

  // === SIDEBAR TOGGLE (mobile) ===
  menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
    overlay.classList.toggle("hidden");
    document.body.classList.toggle("overflow-hidden");
  });

  overlay.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");
  });
</script>
