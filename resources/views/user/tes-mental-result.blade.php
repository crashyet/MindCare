@extends('app')

@section('title', 'Hasil Tes')

@section('content')
<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div class="max-w-3xl mx-auto space-y-6 animate-fade-in">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 shadow-soft text-center space-y-6">
                <h1 class="text-2xl font-bold">{{ $test->judul_tes }}</h1>
                <p class="text-muted-foreground">Berikut hasil dari tes yang Anda isi:</p>

                <div class="py-6">
                    <div class="text-6xl font-bold text-primary">{{ $totalScore }}</div>
                    <p class="text-muted-foreground mt-2">Total Skor</p>
                </div>

                <div class="bg-primary/10 rounded-xl p-6">
                    
                    <h2 class="text-lg font-semibold mb-2">Interpretasi</h2>
                    <p class="text-muted-foreground">{{ $interpretasi }}</p>
                </div>

                <div class="pt-6">
                    <a href="/dashboard/tes">
                        <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition">
                            Kembali ke Tes
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
