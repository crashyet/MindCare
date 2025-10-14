@extends('app')

@section('title', 'Login')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-green-50 to-purple-50 p-4">
  <div class="w-full max-w-md">
    <!-- Logo & Tagline -->
    <div class="text-center mb-8">
      <div class="inline-flex items-center gap-2 mb-4">
        <div class="w-12 h-12 rounded-full bg-gradient-hero flex items-center justify-center shadow-soft">
          <svg xmlns="http://www.w3.org/2000/svg" 
               width="24" height="24" viewBox="0 0 24 24" 
               fill="currentColor" stroke="currentColor" stroke-width="2" 
               stroke-linecap="round" stroke-linejoin="round" 
               class="lucide lucide-heart w-7 h-7 text-primary-foreground">
            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
          </svg>
        </div>
        <span class="text-2xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">MindCare</span>
      </div>
      <p class="text-muted-foreground">Kesehatan mental adalah prioritas</p>
    </div>

    <!-- Card -->
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-medium">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="text-2xl font-semibold leading-none tracking-tight">Selamat Datang</h3>
        <p class="text-sm text-muted-foreground">Login atau daftar untuk melanjutkan</p>
      </div>

      <div class="p-6 pt-0">
        <!-- Tabs -->
        <div class="w-full">
          <div role="tablist" class="grid w-full grid-cols-2 bg-muted rounded-md p-1 text-muted-foreground mb-2">
            <button type="button" 
              role="tab" 
              aria-selected="true" 
              aria-controls="tab-login" 
              id="tab-btn-login"
              class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium 
                     ring-offset-background transition-all 
                     data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm
                     focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
              data-state="active">
              Login
            </button>
            <button type="button" 
              role="tab" 
              aria-selected="false" 
              aria-controls="tab-signup" 
              id="tab-btn-signup"
              class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium 
                     ring-offset-background transition-all 
                     data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm
                     focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
              data-state="inactive">
              Daftar
            </button>
          </div>

          <!-- Login Form -->
          <div id="tab-login" role="tabpanel" aria-labelledby="tab-btn-login" data-state="active" class="space-y-4">
            <form class="space-y-4">
              <div class="space-y-2">
                <label for="login-email" class="text-sm font-medium leading-none">Email</label>
                <input id="login-email" type="email" placeholder="nama@example.com" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <div class="space-y-2">
                <label for="login-password" class="text-sm font-medium leading-none">Password</label>
                <input id="login-password" type="password" placeholder="••••••••" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <button type="submit" 
                class="w-full h-10 px-4 py-2 bg-primary text-primary-foreground hover:bg-primary/90 
                       inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors">
                Login
              </button>
            </form>
          </div>

          <!-- Signup Form -->
          <div id="tab-signup" role="tabpanel" aria-labelledby="tab-btn-signup" data-state="inactive" hidden class="space-y-4">
            <form class="space-y-4">
              <div class="space-y-2">
                <label for="signup-name" class="text-sm font-medium leading-none">Nama Lengkap</label>
                <input id="signup-name" type="text" placeholder="John Doe" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <div class="space-y-2">
                <label for="signup-email" class="text-sm font-medium leading-none">Email</label>
                <input id="signup-email" type="email" placeholder="nama@example.com" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <div class="space-y-2">
                <label for="signup-password" class="text-sm font-medium leading-none">Password</label>
                <input id="signup-password" type="password" placeholder="••••••••" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <div class="space-y-2">
                <label for="signup-confirm" class="text-sm font-medium leading-none">Konfirmasi Password</label>
                <input id="signup-confirm" type="password" placeholder="••••••••" required
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base 
                         placeholder:text-muted-foreground focus-visible:outline-none 
                         focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
              <button type="submit" 
                class="w-full h-10 px-4 py-2 bg-primary text-primary-foreground hover:bg-primary/90 
                       inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors">
                Daftar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tabs Script -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('[role="tab"]');
    const panels = document.querySelectorAll('[role="tabpanel"]');

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        const targetId = tab.getAttribute("aria-controls");

        tabs.forEach(t => {
          t.dataset.state = "inactive";
          t.setAttribute("aria-selected", "false");
        });
        panels.forEach(p => {
          p.hidden = true;
          p.dataset.state = "inactive";
        });

        tab.dataset.state = "active";
        tab.setAttribute("aria-selected", "true");
        document.getElementById(targetId).hidden = false;
        document.getElementById(targetId).dataset.state = "active";
      });
    });
  });
</script>

@endsection
