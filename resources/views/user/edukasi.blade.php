@extends('app')

@section('title', 'Dashboard')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8 animate-fade-in">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Edukasi &amp; <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Quiz</span>
                        </h1>
                        <p class="text-muted-foreground text-lg">Tingkatkan pengetahuan Anda dengan quiz interaktif dan jalur
                            pembelajaran terstruktur</p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Jalur Pembelajaran</h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0s;">
                                <div class="space-y-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-card flex items-center justify-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open w-6 h-6 text-primary">
                                            <path d="M12 7v14"></path>
                                            <path
                                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                            </path>
                                        </svg></div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Dasar-dasar Kesehatan Mental</h3>
                                        <p class="text-sm text-muted-foreground">5 modul pembelajaran</p>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-2"><span
                                                class="text-sm font-medium">Progress</span><span
                                                class="text-sm font-bold text-primary">60%</span></div>
                                        <div class="w-full h-2 bg-muted rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-hero transition-all" style="width: 60%;"></div>
                                        </div>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Lanjutkan</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.1s;">
                                <div class="space-y-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-card flex items-center justify-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trending-up w-6 h-6 text-primary">
                                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                            <polyline points="16 7 22 7 22 13"></polyline>
                                        </svg></div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Manajemen Stres Lanjutan</h3>
                                        <p class="text-sm text-muted-foreground">8 modul pembelajaran</p>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-2"><span
                                                class="text-sm font-medium">Progress</span><span
                                                class="text-sm font-bold text-primary">25%</span></div>
                                        <div class="w-full h-2 bg-muted rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-hero transition-all" style="width: 25%;"></div>
                                        </div>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Lanjutkan</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.2s;">
                                <div class="space-y-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-card flex items-center justify-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-award w-6 h-6 text-primary">
                                            <path
                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                            </path>
                                            <circle cx="12" cy="8" r="6"></circle>
                                        </svg></div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Sertifikasi Mindfulness</h3>
                                        <p class="text-sm text-muted-foreground">12 modul pembelajaran</p>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-2"><span
                                                class="text-sm font-medium">Progress</span><span
                                                class="text-sm font-bold text-primary">0%</span></div>
                                        <div class="w-full h-2 bg-muted rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-hero transition-all" style="width: 0%;"></div>
                                        </div>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Belajar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Quiz Interaktif</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Mengenali Tanda-tanda Stres</h3>
                                    </div>
                                    <p class="text-muted-foreground">Uji pemahaman Anda tentang gejala dan tanda-tanda stres
                                        dalam kehidupan sehari-hari</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝 10
                                            soal</span><span>⏱️ 5 menit</span><span>👥 1234 peserta</span><span
                                            class="px-2 py-1 rounded bg-green-100 text-green-700">Mudah</span></div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Quiz</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.1s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Teknik Relaksasi</h3>
                                        <div
                                            class="flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-4 h-4">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg>85%</div>
                                    </div>
                                    <p class="text-muted-foreground">Seberapa baik Anda memahami berbagai teknik relaksasi
                                        untuk kesehatan mental?</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            15 soal</span><span>⏱️ 8 menit</span><span>👥 987 peserta</span><span
                                            class="px-2 py-1 rounded bg-yellow-100 text-yellow-700">Sedang</span></div>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground h-10 px-4 py-2 w-full bg-secondary hover:bg-secondary/90 transition-smooth">Ulangi
                                        Quiz</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.2s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Kesehatan Mental di Tempat Kerja
                                        </h3>
                                    </div>
                                    <p class="text-muted-foreground">Evaluasi pengetahuan Anda tentang menjaga kesehatan
                                        mental dalam lingkungan profesional</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            12 soal</span><span>⏱️ 7 menit</span><span>👥 756 peserta</span><span
                                            class="px-2 py-1 rounded bg-yellow-100 text-yellow-700">Sedang</span></div>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Quiz</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.3s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Mindfulness dan Meditasi</h3>
                                        <div
                                            class="flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-4 h-4">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg>92%</div>
                                    </div>
                                    <p class="text-muted-foreground">Tes pemahaman Anda tentang praktik mindfulness dan
                                        manfaatnya</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            10 soal</span><span>⏱️ 6 menit</span><span>👥 1456 peserta</span><span
                                            class="px-2 py-1 rounded bg-green-100 text-green-700">Mudah</span></div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground h-10 px-4 py-2 w-full bg-secondary hover:bg-secondary/90 transition-smooth">Ulangi
                                        Quiz</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.4s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Mengelola Emosi Negatif</h3>
                                    </div>
                                    <p class="text-muted-foreground">Pelajari cara mengidentifikasi dan mengelola emosi
                                        negatif dengan efektif</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            14 soal</span><span>⏱️ 9 menit</span><span>👥 892 peserta</span><span
                                            class="px-2 py-1 rounded bg-yellow-100 text-yellow-700">Sedang</span></div>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Quiz</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.5s;">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-semibold flex-1">Quiz: Self-Care dan Boundaries</h3>
                                    </div>
                                    <p class="text-muted-foreground">Pahami pentingnya self-care dan cara menetapkan
                                        batasan yang sehat</p>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            11 soal</span><span>⏱️ 7 menit</span><span>👥 634 peserta</span><span
                                            class="px-2 py-1 rounded bg-green-100 text-green-700">Mudah</span></div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Quiz</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
