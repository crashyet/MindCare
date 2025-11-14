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
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Selamat Datang di
                            <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nihil mollitia provident id eaque ducimus reiciendis rem est cupiditate blanditiis. Aliquam excepturi consectetur unde exercitationem inventore, quaerat facilis minus libero?MindCare</span>
                        </h1>
                        <p class="text-muted-foreground text-lg">Pantau perkembangan kesehatan mental Anda di sini</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                            style="animation-delay: 0s;">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-activity w-6 h-6 text-primary">
                                        <path
                                            d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">+5%</span>
                            </div>
                            <p class="text-sm text-muted-foreground mb-1">Mood Hari Ini</p>
                            <p class="text-2xl font-bold">Baik</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                            style="animation-delay: 0.1s;">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-book-open w-6 h-6 text-secondary">
                                        <path d="M12 7v14">
                                        </path>
                                        <path
                                            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">+2</span>
                            </div>
                            <p class="text-sm text-muted-foreground mb-1">Artikel Dibaca</p>
                            <p class="text-2xl font-bold">12</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                            style="animation-delay: 0.2s;">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-square w-6 h-6 text-accent">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">+3</span>
                            </div>
                            <p class="text-sm text-muted-foreground mb-1">Diskusi Aktif</p>
                            <p class="text-2xl font-bold">8</p>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft hover:shadow-medium transition-smooth animate-slide-up"
                            style="animation-delay: 0.3s;">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-trending-up w-6 h-6 text-primary">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                        <polyline points="16 7 22 7 22 13">
                                        </polyline>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">+12%</span>
                            </div>
                            <p class="text-sm text-muted-foreground mb-1">Progress</p>
                            <p class="text-2xl font-bold">78%</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft">
                        <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                <div class="w-2 h-2 rounded-full bg-primary mt-2"></div>
                                <div class="flex-1">
                                    <p class="font-medium">Membaca artikel: Mengatasi Kecemasan</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full bg-primary/20 text-primary">Artikel</span>
                                        <p class="text-sm text-muted-foreground">2 jam lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                <div class="w-2 h-2 rounded-full bg-primary mt-2">
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Mengikuti diskusi di forum</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full bg-primary/20 text-primary">Forum</span>
                                        <p class="text-sm text-muted-foreground">5 jam lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                <div class="w-2 h-2 rounded-full bg-primary mt-2">
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Menyelesaikan tes kesehatan mental</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full bg-primary/20 text-primary">Tes</span>
                                        <p class="text-sm text-muted-foreground">1 hari lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                <div class="w-2 h-2 rounded-full bg-primary mt-2">
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Chat dengan AI Assistant</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full bg-primary/20 text-primary">Chatbot</span>
                                        <p class="text-sm text-muted-foreground">2 hari lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-4 p-4 rounded-lg bg-muted/50 hover:bg-muted transition-smooth">
                                <div class="w-2 h-2 rounded-full bg-primary mt-2">
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Menyelesaikan kuis edukasi: Stres Management</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full bg-primary/20 text-primary">Edukasi</span>
                                        <p class="text-sm text-muted-foreground">3 hari lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 shadow-soft">
                        <h2 class="text-xl font-semibold mb-4">Grafik Mood Mingguan</h2>
                        <div class="h-64 flex items-end justify-between gap-4 px-4">
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 70%;">
                                </div>
                                <p class="text-xs text-muted-foreground font-medium">Senin</p>
                                <p class="text-sm font-bold text-primary">7</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 60%;">
                                </div>
                                <p class="text-xs text-muted-foreground font-medium">Selasa</p>
                                <p class="text-sm font-bold text-primary">6</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 80%;"></div>
                                <p class="text-xs text-muted-foreground font-medium">Rabu</p>
                                <p class="text-sm font-bold text-primary">8</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 70%;">
                                </div>
                                <p class="text-xs text-muted-foreground font-medium">Kamis</p>
                                <p class="text-sm font-bold text-primary">7</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 90%;"></div>
                                <p class="text-xs text-muted-foreground font-medium">Jumat</p>
                                <p class="text-sm font-bold text-primary">9</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 80%;"></div>
                                <p class="text-xs text-muted-foreground font-medium">Sabtu</p>
                                <p class="text-sm font-bold text-primary">8</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-gradient-hero rounded-t-lg transition-all hover:opacity-80"
                                    style="height: 80%;"></div>
                                <p class="text-xs text-muted-foreground font-medium">Minggu</p>
                                <p class="text-sm font-bold text-primary">8</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-center gap-4 text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-primary"></div><span
                                    class="text-muted-foreground">Skor Mood (1-10)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
