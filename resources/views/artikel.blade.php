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
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Artikel <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Kesehatan
                                Mental</span></h1>
                        <p class="text-muted-foreground text-lg">Baca artikel-artikel edukatif seputar kesehatan mental</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-primary-foreground hover:bg-primary/80 cursor-pointer px-4 py-2 bg-gradient-hero transition-smooth">
                            Semua</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Stres</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kecemasan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Kesehatan</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Mindfulness</div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground cursor-pointer px-4 py-2 hover:bg-muted transition-smooth">
                            Sosial</div>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Stres</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>5 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Cara Mengatasi
                                    Stres di Tempat Kerja</h3>
                                <p class="text-muted-foreground line-clamp-3">Pelajari strategi efektif untuk mengelola
                                    stres dan menjaga kesehatan mental di lingkungan kerja yang penuh tekanan.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Sarah Johnson</span></div><span class="text-muted-foreground">2
                                            hari lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">342</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.1s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Kesehatan</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>7 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Pentingnya
                                    Tidur Berkualitas untuk Kesehatan Mental</h3>
                                <p class="text-muted-foreground line-clamp-3">Memahami hubungan antara kualitas tidur dan
                                    kesejahteraan mental, serta tips untuk meningkatkan kualitas tidur Anda.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Michael Chen</span></div><span class="text-muted-foreground">3
                                            hari lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">289</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.2s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Kecemasan</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>6 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Mengenali
                                    Tanda-tanda Kecemasan</h3>
                                <p class="text-muted-foreground line-clamp-3">Artikel informatif tentang gejala kecemasan,
                                    penyebabnya, dan langkah-langkah yang dapat Anda ambil untuk mengatasinya.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Emily Wilson</span></div><span class="text-muted-foreground">5
                                            hari lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">456</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.3s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Mindfulness</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>8 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Teknik
                                    Mindfulness untuk Kehidupan Sehari-hari</h3>
                                <p class="text-muted-foreground line-clamp-3">Praktik mindfulness sederhana yang dapat Anda
                                    terapkan untuk meningkatkan kesadaran dan mengurangi stres.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. James Anderson</span></div><span
                                            class="text-muted-foreground">1 minggu lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">523</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.4s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Sosial</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>6 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Membangun
                                    Hubungan Sosial yang Sehat</h3>
                                <p class="text-muted-foreground line-clamp-3">Panduan untuk menciptakan dan memelihara
                                    hubungan interpersonal yang positif dan mendukung kesehatan mental.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Lisa Martinez</span></div><span class="text-muted-foreground">1
                                            minggu lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">298</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.5s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Kesehatan</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>5 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Manfaat
                                    Olahraga untuk Kesehatan Mental</h3>
                                <p class="text-muted-foreground line-clamp-3">Bagaimana aktivitas fisik dapat meningkatkan
                                    mood, mengurangi kecemasan, dan meningkatkan kesejahteraan mental secara keseluruhan.
                                </p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. David Lee</span></div><span class="text-muted-foreground">2
                                            minggu lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">401</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.6s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Stres</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>9 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">Mengatasi
                                    Burnout di Era Digital</h3>
                                <p class="text-muted-foreground line-clamp-3">Kenali tanda-tanda burnout dan pelajari
                                    strategi untuk recovery dan pencegahan di lingkungan kerja modern.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Rachel Kim</span></div><span class="text-muted-foreground">2
                                            minggu lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">367</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up group cursor-pointer"
                            style="animation-delay: 0.7s;">
                            <div class="space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary/10 text-primary hover:bg-primary/20">
                                        Self-Care</div>
                                    <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span>7 menit</span></div>
                                </div>
                                <h3 class="text-xl font-semibold group-hover:text-primary transition-smooth">
                                    Self-Compassion: Kunci Kesehatan Mental</h3>
                                <p class="text-muted-foreground line-clamp-3">Mengapa bersikap baik pada diri sendiri sama
                                    pentingnya dengan empati kepada orang lain untuk kesehatan mental.</p>
                                <div class="pt-4 border-t border-border space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Dr. Amanda Foster</span></div><span class="text-muted-foreground">3
                                            minggu lalu</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart w-4 h-4 text-primary">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg><span class="font-medium">445</span></div><button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 bg-gradient-hero hover:shadow-medium transition-smooth">Baca</button>
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
