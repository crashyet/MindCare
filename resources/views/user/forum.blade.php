@extends('app')

@section('title', 'Dashboard')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8 animate-fade-in">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold mb-2">Forum <span
                                    class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Diskusi</span>
                            </h1>
                            <p class="text-muted-foreground text-lg">Berbagi cerita dan dapatkan dukungan dari komunitas</p>
                        </div><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero hover:shadow-medium transition-smooth"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-plus w-5 h-5 mr-2">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>Buat Diskusi Baru</button>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-primary-foreground hover:bg-primary/80 cursor-pointer px-4 py-2 bg-gradient-hero transition-smooth">
                            Semua</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kecemasan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Stres</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Depresi</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Mindfulness</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Self-Care</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kesehatan</div>
                    </div>
                    <div class="grid md:grid-cols-4 gap-4">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">1,234</p>
                            <p class="text-sm text-muted-foreground">Total Diskusi</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">5,678</p>
                            <p class="text-sm text-muted-foreground">Anggota Aktif</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">45</p>
                            <p class="text-sm text-muted-foreground">Diskusi Hari Ini</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 shadow-soft text-center">
                            <p class="text-2xl font-bold text-primary">189</p>
                            <p class="text-sm text-muted-foreground">Balasan Hari Ini</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex items-center gap-1 text-orange-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-4 h-4">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Bagaimana cara mengatasi overthinking?</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Akhir-akhir ini saya
                                                sering overthinking dan sulit tidur. Ada yang punya tips?</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Sarah M.</span><span>•</span><span>30 menit
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Kecemasan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">12</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">24</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.05s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Tips work-life balance untuk pekerja remote</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Sejak WFH, saya
                                                kesulitan memisahkan waktu kerja dan istirahat...</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">John D.</span><span>•</span><span>2 jam
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Stres</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">8</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">15</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.1s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex items-center gap-1 text-orange-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-4 h-4">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Sharing: Perjalanan saya mengatasi depresi</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Saya ingin berbagi
                                                pengalaman recovery dari depresi selama 2 tahun terakhir...</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Anonymous</span><span>•</span><span>5 jam
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Depresi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">23</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">45</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.15s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Rekomendasi aplikasi meditasi terbaik?</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Ada yang bisa
                                                rekomendasikan aplikasi meditasi untuk pemula?</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Lisa K.</span><span>•</span><span>1 hari
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Mindfulness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">16</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">20</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.2s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex items-center gap-1 text-orange-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-4 h-4">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Bagaimana membangun kepercayaan diri?</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Saya struggle dengan
                                                low self-esteem, terutama di lingkungan sosial...</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Michael P.</span><span>•</span><span>1 hari
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Self-Care</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">19</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">32</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.25s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Tips tidur berkualitas untuk anxiety</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Anxiety saya sering
                                                muncul malam hari, jadi susah tidur. Ada solusi?</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Emma W.</span><span>•</span><span>2 hari
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Kesehatan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">11</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">18</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.3s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex items-center gap-1 text-orange-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-4 h-4">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg></div>
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Cara menghadapi toxic workplace</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Lingkungan kerja
                                                yang toxic mulai mempengaruhi mental health saya...</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Ryan T.</span><span>•</span><span>2 hari
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Stres</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">27</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">51</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up cursor-pointer group"
                            style="animation-delay: 0.35s;">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold group-hover:text-primary transition-smooth mb-2">
                                                Self-care routine yang efektif</h3>
                                            <p class="text-sm text-muted-foreground mb-3 line-clamp-1">Boleh share
                                                self-care routine kalian yang paling berhasil?</p>
                                            <div class="flex flex-wrap items-center gap-3 text-sm text-muted-foreground">
                                                <span class="font-medium">Nina R.</span><span>•</span><span>3 hari
                                                    lalu</span>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/5 text-primary border-primary/20">
                                                    Self-Care</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center md:items-end gap-4 md:gap-2 text-sm">
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="font-medium">14</span></div>
                                    <div class="flex items-center gap-1 text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-4 h-4">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg><span class="font-medium">29</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:text-accent-foreground h-10 py-2 px-8 hover:bg-muted">Muat
                            Lebih Banyak</button></div>
                </div>
            </div>
        </main>
    </div>

@endsection
