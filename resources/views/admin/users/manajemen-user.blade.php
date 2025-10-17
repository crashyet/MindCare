@extends('app')

@section('title', 'Manajemen User')

@section('content')

<x-sidebar></x-sidebar>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
  <div class="p-4 md:p-8">
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold text-foreground">Manajemen Pengguna</h1>
          <p class="text-muted-foreground">Kelola pengguna dan hak akses</p>
        </div><a href="{{ route('admin.users.create') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus w-4 h-4 mr-2">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <line x1="19" x2="19" y1="8" y2="14"></line>
            <line x1="22" x2="16" y1="11" y2="11"></line>
          </svg>Tambah Pengguna</a>
      </div>
      <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
        <div class="flex flex-col space-y-1.5 p-6">
            <div class="flex items-center gap-4">
                <form action="{{ route('admin.users.index') }}" method="GET" class="relative flex-1" id="searchForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-muted-foreground">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input 
                        type="text" 
                        name="search" 
                        id="searchInput"
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10 pr-10" 
                        placeholder="Cari pengguna..." 
                        value="{{ request('search') }}"
                    >
                    
                    @if(request('search'))
                    <button 
                        type="button" 
                        id="clearSearch"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors"
                        title="Clear search"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    @endif
                </form>
            </div>
        </div>

        <script>
        // Clear search functionality
        const clearBtn = document.getElementById('clearSearch');
        if (clearBtn) {
            clearBtn.addEventListener('click', function() {
                window.location.href = "{{ route('admin.users.index') }}";
            });
        }
        </script>
        <div class="p-6 pt-0">
          <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
              <thead class="[&amp;_tr]:border-b">
                <tr class="border-b transition-colors data-[state=selected]:bg-muted hover:bg-muted/50">
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Nama</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Email</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Role</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Bergabung</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Aksi</th>
                </tr>
              </thead>
              <tbody class="[&amp;_tr:last-child]:border-0">
                @foreach ($users as $user)
                  <tr class="border-b border-border hover:bg-primary/5 transition-colors duration-200">
                    <td class="px-4 py-3 font-medium">{{ $user->name }}</td>
                    <td class="px-4 py-3">{{ $user->email }}</td>
                    <td class="px-4 py-3">
                      <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold
                        {{ $user->role === 'admin' 
                            ? 'bg-sidebar-accent text-foreground' 
                            : 'bg-accent text-sidebar-foreground' }}">
                        {{ ucfirst($user->role) }}
                      </span>
                    </td>
                    <td class="px-4 py-3 text-muted-foreground">{{ $user->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-3 text-center">
                      <div class="flex gap-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}"
                            class="inline-flex items-center justify-center rounded-md bg-primary text-white hover:bg-primary/90 transition px-3 py-1.5 text-xs font-medium shadow-soft">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232a3 3 0 0 1 4.243 4.243L7.5 21H3v-4.5l12.232-11.268z" />
                            </svg>Edit
                        </a>

                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                            class="inline-flex items-center justify-center gap-1.5 rounded-full border border-border bg-red hover:bg-red-500 hover:text-white transition-all px-3 py-1.5 text-xs font-medium shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Hapus
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection