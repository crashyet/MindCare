@extends('app')

@section('title', 'Manajemen User')

@section('content')

<x-sidebar></x-sidebar>



<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
  <div class="p-4 md:p-8">
    <div class="space-y-6">
      <div class="flex items-center gap-4">
        <button onclick="window.location.href='/admin/users'" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 w-10"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-5 h-5">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path>
          </svg>
        </button>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Tambah Pengguna</h1>
          <p class="text-muted-foreground">Buat akun pengguna baru</p>
        </div>
      </div>
      <div class="rounded-lg border bg-card text-card-foreground shadow-sm max-w-2xl">
        <div class="flex flex-col space-y-1.5 p-6">
          <h3 class="text-2xl font-semibold leading-none tracking-tight">Informasi Pengguna</h3>
          <p class="text-sm text-muted-foreground">Masukkan detail pengguna baru</p>
        </div>
        <div class="p-6 pt-0">
          <form class="space-y-4" method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="full_name">Nama Lengkap *</label>
              <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="full_name" placeholder="John Doe" name="full_name" required="" value="">
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Email *</label>
              <input type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="email" placeholder="john@example.com" name="email" required="" value="">
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="password">Password *</label>
              <input type="password" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="password" placeholder="Minimal 6 karakter" name="password" required="" value="">
            </div>
            
            <div class="space-y-2 relative">
              <label for="role" class="text-sm font-medium leading-none">Role *</label>

              <!-- tombol tampilan -->
              <div class="relative">
                <button type="button"
                  class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm text-foreground focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <span id="roleLabel">User</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>

                <!-- select asli, transparan tapi clickable -->
                <select name="role" id="roleSelect"
                  class="absolute top-0 left-0 h-10 w-full opacity-0 cursor-pointer">
                  <option value="user" selected>User</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>



            <div class="flex gap-4 pt-4"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex-1" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus w-4 h-4 mr-2">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <line x1="19" x2="19" y1="8" y2="14"></line>
                  <line x1="22" x2="16" y1="11" y2="11"></line>
                </svg>Tambah Pengguna</button><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2" type="button">Batal</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const select = document.getElementById("roleSelect");
    const label = document.getElementById("roleLabel");

    select.addEventListener("change", (e) => {
      label.textContent = e.target.options[e.target.selectedIndex].text;
    });
  });
</script>




@endsection