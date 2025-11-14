@extends('app')

@section('title', 'Tes Mental')

@section('content')
<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div class="max-w-3xl mx-auto space-y-6 animate-fade-in">

            {{-- Tombol kembali --}}
            <a href="/dashboard/tes">
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left w-4 h-4">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                    Kembali
                </button>
            </a>

            {{-- Kartu utama --}}
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 shadow-soft">
                <div class="space-y-6">

                    {{-- Judul & Deskripsi Tes --}}
                    <div>
                        <h1 class="text-2xl font-bold mb-2">{{ $test->judul_tes }}</h1>
                        <p class="text-sm text-muted-foreground">
                            Jawab setiap pertanyaan dengan jujur berdasarkan kondisi Anda dalam 2 minggu terakhir.
                            Skala 0–5
                        </p>
                    </div>

                    {{-- Progress Bar --}}
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-muted-foreground">Pertanyaan {{ $no }} dari {{ $totalQuestions }}</span>
                            <span class="font-medium text-primary">
                                {{ round(($no / $totalQuestions) * 100) }}%
                            </span>
                        </div>
                        <div class="relative w-full overflow-hidden rounded-full bg-secondary h-2">
                            <div class="h-full bg-primary transition-all"
                                style="width: {{ ($no / $totalQuestions) * 100 }}%;"></div>
                        </div>
                    </div>

                    {{-- Form Pertanyaan --}}
                    <form action="{{ route('user.tests.answer', ['id' => $test->id, 'no' => $no]) }}" method="POST">
                        @csrf
                        <div class="space-y-6 py-6">
                            <h2 class="text-xl font-semibold">{{ $currentQuestion->pertanyaan }}</h2>

                            {{-- Pilihan Jawaban --}}
                            <div class="space-y-4">
                                @foreach ($currentQuestion->answers as $answer)
                                    <label
                                        class="flex items-center justify-between p-3 border rounded-lg hover:bg-accent/30 transition cursor-pointer">
                                        <div class="flex items-center gap-3">
                                            <input type="radio" name="jawaban" value="{{ $answer->skor }}" required
                                                class="h-4 w-4 text-primary border-gray-300 focus:ring-primary">
                                            <span>{{ $answer->jawaban }}</span>
                                        </div>
                                        <span class="text-sm text-muted-foreground">{{ $answer->skor }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Navigasi --}}
<div class="flex justify-between pt-6 border-t">
    {{-- Tombol Sebelumnya hanya muncul kalau bukan soal pertama --}}
    @if ($no > 1)
        <a href="{{ route('user.tests.show', ['id' => $test->id, 'no' => max(1, $no - 1)]) }}"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
            Sebelumnya
        </a>
    @else
        <div></div> {{-- spacer --}}
    @endif

    {{-- Tombol Selanjutnya / Selesai --}}
    <button type="submit"
        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero">
        {{ $no < $totalQuestions ? 'Selanjutnya' : 'Selesai' }}
    </button>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

{{-- Cegah form resubmit kalau user tekan back/reload --}}
<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>
@endsection
