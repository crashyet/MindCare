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
                                            <h3 class="text-lg font-semibold mb-2">Tes Kesehatan Mental Umum</h3>
                                            <p class="text-sm text-muted-foreground">Evaluasi komprehensif kondisi kesehatan
                                                mental Anda secara menyeluruh</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝 30
                                            soal</span><span>⏱️ 15 menit</span><span>👥 5.234 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Komprehensif</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.1s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chart-no-axes-column-increasing w-7 h-7 text-primary">
                                                <line x1="12" x2="12" y1="20" y2="10"></line>
                                                <line x1="18" x2="18" y1="20" y2="4"></line>
                                                <line x1="6" x2="6" y1="20" y2="16"></line>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold mb-2">Tes Tingkat Kecemasan (GAD-7)</h3>
                                            <p class="text-sm text-muted-foreground">Ukur tingkat kecemasan Anda dengan
                                                instrumen yang tervalidasi secara klinis</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝 7
                                            soal</span><span>⏱️ 3 menit</span><span>👥 8.947 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Kecemasan</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.2s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-check w-7 h-7 text-primary">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="m9 15 2 2 4-4"></path>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold mb-2">Tes Tingkat Depresi (PHQ-9)</h3>
                                            <p class="text-sm text-muted-foreground">Screening depresi menggunakan Patient
                                                Health Questionnaire-9</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝 9
                                            soal</span><span>⏱️ 4 menit</span><span>👥 7.123 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Depresi</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.3s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock w-7 h-7 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold mb-2">Tes Tingkat Stres</h3>
                                            <p class="text-sm text-muted-foreground">Identifikasi tingkat stres dan
                                                sumber-sumber stres dalam hidup Anda</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            20 soal</span><span>⏱️ 10 menit</span><span>👥 6.456 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Stres</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.4s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                            <h3 class="text-lg font-semibold mb-2">Tes Burnout Assessment</h3>
                                            <p class="text-sm text-muted-foreground">Evaluasi tanda-tanda burnout dan
                                                tingkat kelelahan emosional Anda</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            16 soal</span><span>⏱️ 8 menit</span><span>👥 4.234 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Burnout</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                                style="animation-delay: 0.5s;">
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-14 h-14 rounded-xl bg-gradient-card flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock w-7 h-7 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold mb-2">Tes Kualitas Tidur</h3>
                                            <p class="text-sm text-muted-foreground">Analisis pola tidur dan kualitas
                                                istirahat Anda untuk kesehatan mental yang optimal</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground flex-wrap"><span>📝
                                            12 soal</span><span>⏱️ 6 menit</span><span>👥 3.892 peserta</span><span
                                            class="px-3 py-1 rounded-full bg-primary/10 text-primary font-medium">Kesehatan</span>
                                    </div><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-hero hover:shadow-medium transition-smooth">Mulai
                                        Tes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Riwayat Tes</h2>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft">
                            <div class="space-y-4">
                                <div
                                    class="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                    <div class="flex-1">
                                        <h3 class="font-semibold mb-1">Tes Kesehatan Mental Umum</h3>
                                        <p class="text-sm text-muted-foreground">15 Januari 2025</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="px-4 py-2 rounded-full bg-green-100 text-green-700 font-medium">Baik
                                        </div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                    <div class="flex-1">
                                        <h3 class="font-semibold mb-1">Tes Tingkat Kecemasan</h3>
                                        <p class="text-sm text-muted-foreground">10 Januari 2025</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 font-medium">
                                            Ringan</div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                    <div class="flex-1">
                                        <h3 class="font-semibold mb-1">Tes Tingkat Stres</h3>
                                        <p class="text-sm text-muted-foreground">5 Januari 2025</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="px-4 py-2 rounded-full bg-orange-100 text-orange-700 font-medium">
                                            Sedang</div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
