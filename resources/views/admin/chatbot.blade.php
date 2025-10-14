@extends('app')

@section('title', 'Chat Bot')

@section('content')

    <x-sidebar></x-sidebar>
    <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
        <div class="p-4 md:p-8">
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Chatbot Manager</h1>
                    <p class="text-muted-foreground">Kelola konfigurasi chatbot AI</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="font-semibold tracking-tight text-base">Total Percakapan</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold text-foreground">1,248</div>
                            <p class="text-xs text-muted-foreground mt-1">+12% dari minggu lalu</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="font-semibold tracking-tight text-base">Pengguna Aktif</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold text-foreground">432</div>
                            <p class="text-xs text-muted-foreground mt-1">Pengguna unik bulan ini</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="font-semibold tracking-tight text-base">Tingkat Kepuasan</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold text-foreground">94%</div>
                            <p class="text-xs text-muted-foreground mt-1">Rating positif</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-bot w-5 h-5">
                                <path d="M12 8V4H8"></path>
                                <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                                <path d="M2 14h2"></path>
                                <path d="M20 14h2"></path>
                                <path d="M15 13v2"></path>
                                <path d="M9 13v2"></path>
                            </svg>Konfigurasi Chatbot</h3>
                    </div>
                    <div class="p-6 pt-0 space-y-6">
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Pesan
                                Sambutan</label>
                            <textarea
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                placeholder="Masukkan pesan sambutan chatbot..." rows="4">Halo! Saya adalah asisten virtual MindCare. Saya di sini untuk membantu Anda dengan informasi kesehatan mental. Bagaimana saya bisa membantu Anda hari ini?</textarea>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Respons
                                Default</label>
                            <textarea
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                placeholder="Masukkan respons default untuk pertanyaan yang tidak dipahami..." rows="4">Maaf, saya tidak sepenuhnya memahami pertanyaan Anda. Bisakah Anda menjelaskan lebih detail? Atau Anda bisa memilih salah satu topik dari menu quick replies.</textarea>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Instruksi
                                Sistem (AI Prompt)</label>
                            <textarea
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                placeholder="Masukkan instruksi untuk AI..." rows="6">Anda adalah asisten virtual yang ramah dan empatik untuk kesehatan mental. Berikan dukungan emosional, informasi yang akurat, dan selalu anjurkan untuk berkonsultasi dengan profesional jika diperlukan. Gunakan bahasa yang hangat dan mendukung.</textarea>
                        </div><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-save w-4 h-4 mr-2">
                                <path
                                    d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z">
                                </path>
                                <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"></path>
                                <path d="M7 3v4a1 1 0 0 0 1 1h7"></path>
                            </svg>Simpan Pengaturan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
