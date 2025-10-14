@extends('app')

@section('title', 'Dashboard')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar-user></x-sidebar-user>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-6 animate-fade-in">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Chatbot <span
                                class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Pendamping</span>
                        </h1>
                        <p class="text-muted-foreground text-lg">Asisten AI yang siap mendengarkan Anda kapan saja</p>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft overflow-hidden">
                        <div class="h-[500px] overflow-y-auto p-6 space-y-4 bg-gradient-accent/30">
                            <div class="flex gap-3 flex-row animate-fade-in">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center bg-gradient-hero">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-bot w-6 h-6 text-primary-foreground">
                                        <path d="M12 8V4H8"></path>
                                        <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                                        <path d="M2 14h2"></path>
                                        <path d="M20 14h2"></path>
                                        <path d="M15 13v2"></path>
                                        <path d="M9 13v2"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 max-w-[70%] text-left">
                                    <div
                                        class="inline-block p-4 rounded-2xl shadow-soft bg-card text-foreground rounded-tl-none">
                                        <p class="text-sm md:text-base">Halo! Saya adalah asisten AI MindCare. Saya di sini
                                            untuk mendengarkan dan membantu Anda. Bagaimana perasaan Anda hari ini? 💙</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground mt-1 px-2">Baru saja</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-t border-border bg-muted/30">
                            <p class="text-sm text-muted-foreground mb-2">Balasan cepat:</p>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Saya
                                    merasa cemas</button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Saya
                                    sedih hari ini</button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Saya
                                    butuh motivasi</button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Tips
                                    mengatasi stres</button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Cara
                                    tidur lebih baik</button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">Teknik
                                    pernapasan</button>
                            </div>
                        </div>
                        <div class="p-4 border-t border-border bg-card">
                            <div class="flex gap-3">
                                <input
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm flex-1"
                                    placeholder="Ketik pesan Anda di sini..." value="">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 py-2 bg-gradient-hero hover:shadow-medium transition-smooth px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-5 h-5">
                                        <path
                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                        </path>
                                        <path d="m21.854 2.147-10.94 10.939">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-lg border text-card-foreground shadow-sm p-6 bg-accent-light border-accent shadow-soft">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-bot w-7 h-7 text-accent-foreground">
                                        <path d="M12 8V4H8">
                                        </path>
                                        <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                                        <path d="M2 14h2"></path>
                                        <path d="M20 14h2"></path>
                                        <path d="M15 13v2">
                                        </path>
                                        <path d="M9 13v2">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Tentang Chatbot Kami</h3>
                                <p class="text-sm text-muted-foreground">Chatbot ini menggunakan AI untuk memberikan
                                    dukungan emosional dan informasi seputar kesehatan mental. Meskipun kami berusaha
                                    memberikan respons yang membantu, chatbot ini tidak menggantikan konsultasi dengan
                                    profesional kesehatan mental.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
