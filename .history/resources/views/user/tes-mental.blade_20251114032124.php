@extends('app')

@section('title', 'Tes Mental')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8 animate-fade-in">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Tes <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Mental
                                Health</span></h1>
                        <p class="text-muted-foreground text-lg">Evaluasi kondisi kesehatan mental Anda dengan tes yang
                            tervalidasi</p>
                    </div>
                    <div
                        class="rounded-lg border text-card-foreground shadow-sm p-6 bg-accent-light border-accent shadow-soft">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center"><span
                                        class="text-2xl">ℹ️</span></div>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Catatan Penting</h3>
                                <p class="text-sm text-muted-foreground">Tes ini bersifat self-assessment dan tidak
                                    menggantikan diagnosis profesional. Jika Anda mengalami masalah serius, segera
                                    konsultasikan dengan tenaga profesional kesehatan mental.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Tes yang Tersedia</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                          @foreach ($tests as $test)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clipboard-list w-7 h-7 text-primary">
                                                <rect width="8" height="4" x="8" y="2" rx="1"
                                                    ry="1"></rect>
                                                <path
                                                    d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                </path>
                                                <path d="M12 11h4"></path>
                                                <path d="M12 16h4"></path>
                                                <path d="M8 11h.01"></path>
                                                <path d="M8 16h.01"></path>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold mb-2">{{ $test->judul_tes }}</h3>
                                            <p class="text-sm text-muted-foreground">{{ $test->deskripsi }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝 {{ $test->questions->count() }}
                                            soal</span>
                                            <span>👥 {{ $test->participants_count }} peserta</span>
                                            
                                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Komprehensif</span>
                                    </div>
                                    <a href="{{ route('user.tests.show', $test->id) }}"
                                    <button 
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button></a>
                                </div>
                            </div>
                          @endforeach
                          
                        </div>
                    </div>
                    <div>
    <h2 class="text-2xl font-semibold mb-4">Riwayat Tes</h2>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft">

        @if($history->isEmpty())
            <p class="text-muted-foreground">Belum ada riwayat tes.</p>
        @else
            <div class="space-y-4">

                @foreach ($history as $item)
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">

                    <div class="flex-1">
                        <h3 class="font-semibold mb-1">
                            {{ $item->test->judul_tes }}
                        </h3>
                        <p class="text-sm text-muted-foreground">
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                        </p>
                    </div>

                    @php
                        if ($item->total_skor < 10) {
                            $status = ['label' => 'Baik', 'color' => 'green'];
                        } elseif ($item->total_skor < 20) {
                            $status = ['label' => 'Ringan', 'color' => 'yellow'];
                        } elseif ($item->total_skor < 30) {
                            $status = ['label' => 'Sedang', 'color' => 'orange'];
                        } else {
                            $status = ['label' => 'Tinggi', 'color' => 'red'];
                        }
                    @endphp

                    <div class="flex items-center gap-4">
                        <div class="px-4 py-2 rounded-full bg-{{ $status['color'] }}-100 text-{{ $status['color'] }}-700 font-medium">
                            {{ $status['label'] }}
                        </div>

                        <a href="{{ route('user.tests.result', ['id' => $item->test_id, 'attempt' => $item->attempt_id]) }}"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 transition-smooth">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        @endif

    </div>
</div>

                </div>
            </div>
        </main>
    </div>

@endsection
