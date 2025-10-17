@extends('app')

@section('title', 'Manajemen Tes')

@section('content')

<x-sidebar></x-sidebar>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
  <div class="p-4 md:p-8">
    <div class="space-y-6">
      <div class="flex items-center gap-4">
        <button onclick="window.history.back()"
          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background h-10 w-10 hover:bg-accent hover:text-accent-foreground">
          <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-left w-5 h-5" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path>
          </svg>
        </button>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Tambah Tes Mental Health</h1>
          <p class="text-muted-foreground">Buat tes kesehatan mental baru</p>
        </div>
      </div>

      <form class="space-y-6" id="testForm" method="post" action="{{ route('admin.tests.store') }}">
        @csrf
        <!-- Informasi Tes -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm max-w-4xl">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Informasi Tes</h3>
            <p class="text-sm text-muted-foreground">Detail dasar tes mental health</p>
          </div>
          <div class="p-6 pt-0 space-y-4">
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none" for="title">Judul Tes *</label>
              <input id="title" placeholder="Contoh: Tes Tingkat Kecemasan" required name="title"
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none" for="description">Deskripsi *</label>
              <textarea id="description" placeholder="Deskripsi tentang tes ini..." rows="3" required name="description"
                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none" for="category">Kategori *</label>
                <select id="category" name="category"
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                  <option value="">Pilih kategori</option>
                  <option value="Anxiety">Anxiety</option>
                  <option value="Depression">Depression</option>
                  <option value="Stress">Stress</option>
                  <option value="PTSD">PTSD</option>
                  <option value="Self-Esteem">Self-Esteem</option>
                </select>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none" for="duration">Durasi (menit) *</label>
                <input type="number" id="duration" min="5" max="120" value="15" name="duration"
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
              </div>
            </div>

            <div class="flex items-center space-x-2">
              <input type="checkbox" id="published" name="published"
                class="peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 bg-input checked:bg-primary">
              <label class="text-sm font-medium leading-none" for="published">Publikasikan langsung</label>
            </div>
          </div>
        </div>

        <!-- Pertanyaan Tes -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm max-w-4xl">
          <div class="p-6 flex flex-row items-center justify-between">
            <div>
              <h3 class="text-2xl font-semibold leading-none tracking-tight">Pertanyaan Tes</h3>
              <p class="text-sm text-muted-foreground">Tambahkan pertanyaan dengan skor</p>
            </div>
            <button id="addQuestion" type="button"
              class="inline-flex items-center justify-center gap-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-sm font-medium">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4 mr-2">
                      <path d="M5 12h14"></path>
                      <path d="M12 5v14"></path>
                    </svg> Tambah Pertanyaan
            </button>
          </div>
          <div id="questionsContainer" class="p-6 pt-0 space-y-6"></div>
        </div>

        <div class="flex gap-4 max-w-4xl">
          <button type="submit"
            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex-1 text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
              <path d="M12 11h4"></path>
              <path d="M12 16h4"></path>
              <path d="M8 11h.01"></path>
              <path d="M8 16h.01"></path>
            </svg>
            Simpan Tes
          </button>
          <button type="button" onclick="window.history.back()"
            class="inline-flex items-center justify-center gap-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md text-sm font-medium">
            Batal
          </button>
        </div>
      </form>
    </div>
  </div>
</main>

<script>
let qIndex = 0;

document.getElementById('addQuestion').addEventListener('click', () => {
  const container = document.getElementById('questionsContainer');
  const block = document.createElement('div');
  block.className = "rounded-lg border text-card-foreground shadow-sm p-4 bg-muted/50 space-y-4 relative";
  block.setAttribute('data-index', qIndex);

  block.innerHTML = `
    <button type="button" class="absolute top-2 right-2 text-red-500 hover:text-red-700 text-sm" onclick="this.parentElement.remove()">Hapus</button>
    
    <div class="space-y-2">
      <label class="text-sm font-medium leading-none">Pertanyaan *</label>
      <textarea name="questions[${qIndex}][pertanyaan]" placeholder="Tulis pertanyaan..." required
        class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"></textarea>
    </div>

    <div class="space-y-2">
      <label class="text-sm font-medium leading-none">Opsi Jawaban *</label>
      <div class="options space-y-2">
        <input name="questions[${qIndex}][jawaban][]" placeholder="Opsi 1" required
          class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
        <input name="questions[${qIndex}][skor][]" type="number" placeholder="Skor 1" min="0" max="10" required
          class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
      </div>
      <button type="button" class="addOption inline-flex items-center justify-center gap-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-plus w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14M12 5v14"></path>
        </svg>Tambah Opsi
      </button>
    </div>
  `;
  
  container.appendChild(block);
  qIndex++;
});

// Tambah opsi jawaban secara dinamis
document.getElementById('questionsContainer').addEventListener('click', (e) => {
  if (e.target.closest('.addOption')) {
    const questionBlock = e.target.closest('[data-index]');
    const index = questionBlock.getAttribute('data-index');
    const optionsDiv = questionBlock.querySelector('.options');

    const optCount = optionsDiv.querySelectorAll('input[name^="questions"]').length / 2 + 1;

    const jawaban = document.createElement('input');
    jawaban.name = `questions[${index}][jawaban][]`;
    jawaban.placeholder = `Opsi ${optCount}`;
    jawaban.required = true;
    jawaban.className = "flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2";

    const skor = document.createElement('input');
    skor.name = `questions[${index}][skor][]`;
    skor.type = 'number';
    skor.placeholder = `Skor ${optCount}`;
    skor.min = 0;
    skor.max = 10;
    skor.required = true;
    skor.className = "flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2";

    optionsDiv.appendChild(jawaban);
    optionsDiv.appendChild(skor);
  }
});
</script>


@endsection
