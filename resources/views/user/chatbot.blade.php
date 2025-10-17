@extends('app')

@section('title', 'Chatbot Pendamping')

@section('content')

<style>
    /* Hilangkan padding kanan akibat scrollbar */
    #chat-box {
        scrollbar-gutter: stable;
        padding-right: calc(1.5rem - 6px); /* kompensasi biar pas */
    }

    /* Scrollbar custom (opsional biar lebih halus) */
    #chat-box::-webkit-scrollbar {
        width: 6px;
    }
    #chat-box::-webkit-scrollbar-thumb {
        background: rgba(120, 120, 120, 0.4);
        border-radius: 10px;
    }
    #chat-box::-webkit-scrollbar-thumb:hover {
        background: rgba(120, 120, 120, 0.6);
    }
</style>


<div class="min-h-screen bg-background">
    <x-sidebar-user></x-sidebar-user>

    <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
        <div class="p-4 md:p-8">
            <div class="space-y-6 animate-fade-in">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">
                        Chatbot <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Pendamping</span>
                    </h1>
                    <p class="text-muted-foreground text-lg">Asisten AI yang siap mendengarkan Anda kapan saja</p>
                </div>

                <!-- Chat Box -->
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft overflow-hidden">
                    <div id="chat-box" class="h-[500px] overflow-y-auto p-6 space-y-4 bg-gradient-accent/30">
                        <!-- Pesan awal bot -->
                        <div class="flex gap-3 flex-row animate-fade-in">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center bg-gradient-hero">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-bot w-6 h-6 text-primary-foreground" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 8V4H8"></path>
                                    <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                                    <path d="M2 14h2"></path>
                                    <path d="M20 14h2"></path>
                                    <path d="M15 13v2"></path>
                                    <path d="M9 13v2"></path>
                                </svg>
                            </div>
                            <div class="flex-1 max-w-[70%] text-left">
                                <div class="inline-block p-4 rounded-2xl shadow-soft bg-card text-foreground rounded-tl-none">
                                    <p class="text-sm md:text-base">
                                        Halo! Saya adalah asisten AI MindCare. Saya di sini untuk mendengarkan dan membantu Anda. Bagaimana perasaan Anda hari ini? 💙
                                    </p>
                                </div>
                                <p class="text-xs text-muted-foreground mt-1 px-2">Baru saja</p>
                            </div>
                        </div>
                    </div>

                    <!-- Balasan cepat -->
                    <div class="p-4 border-t border-border bg-muted/30">
                        <p class="text-sm text-muted-foreground mb-2">Balasan cepat:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Saya merasa cemas', 'Saya sedih hari ini', 'Saya butuh motivasi', 'Tips mengatasi stres', 'Cara tidur lebih baik', 'Teknik pernapasan'] as $text)
                            <button class="quick-reply inline-flex items-center justify-center gap-2 text-sm font-medium border border-input bg-background h-9 rounded-md px-3 hover:bg-primary/10 hover:text-primary hover:border-primary/30 transition-smooth">
                                {{ $text }}
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Input pesan -->
                    <div class="p-4 border-t border-border bg-card">
                        <div class="flex gap-3">
                            <input id="chat-input" placeholder="Ketik pesan Anda di sini..."
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" />
                            <button id="chat-send"
                                class="inline-flex items-center justify-center gap-2 text-sm font-medium text-primary-foreground h-10 px-6 py-2 bg-gradient-hero rounded-md hover:shadow-medium transition-smooth">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-5 h-5">
                                    <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                                    <path d="m21.854 2.147-10.94 10.939"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tentang chatbot -->
                <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-accent-light border-accent shadow-soft">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot w-7 h-7 text-accent-foreground">
                                    <path d="M12 8V4H8"></path>
                                    <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                                    <path d="M2 14h2"></path>
                                    <path d="M20 14h2"></path>
                                    <path d="M15 13v2"></path>
                                    <path d="M9 13v2"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Tentang Chatbot Kami</h3>
                            <p class="text-sm text-muted-foreground">
                                Chatbot ini menggunakan AI untuk memberikan dukungan emosional dan informasi seputar kesehatan mental.
                                Namun, chatbot ini tidak menggantikan konsultasi dengan profesional kesehatan mental.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const chatBox = document.getElementById('chat-box');
    const input = document.getElementById('chat-input');
    const sendBtn = document.getElementById('chat-send');
    const quickReplies = document.querySelectorAll('.quick-reply');

    function appendMessage(message, sender = 'user') {
        const wrapper = document.createElement('div');
        wrapper.className = `flex gap-3 flex-row ${sender === 'user' ? 'justify-end' : ''}`;

        if (sender === 'bot') {
            wrapper.innerHTML = `
                <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center bg-gradient-hero">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-bot w-5 h-5 text-primary-foreground" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 8V4H8"></path>
                        <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                        <path d="M2 14h2"></path>
                        <path d="M20 14h2"></path>
                        <path d="M15 13v2"></path>
                        <path d="M9 13v2"></path>
                    </svg>
                </div>
                <div class="flex-1 max-w-[70%] text-left">
                    <div class="inline-block p-4 rounded-2xl shadow-soft bg-card text-foreground rounded-tl-none">${message}</div>
                </div>
            `;
        } else {
            wrapper.innerHTML = `
                <div class="flex-1 w-full text-right">
                    <div class="inline-block p-4 rounded-2xl shadow-soft bg-gradient-hero text-primary-foreground rounded-tr-none">${message}</div>
                </div>
            `;
        }

        chatBox.appendChild(wrapper);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    async function sendMessage(messageText) {
        const message = messageText || input.value.trim();
        if (!message) return;

        appendMessage(message, 'user');
        input.value = '';

        const typing = document.createElement('p');
        typing.className = "text-sm text-muted-foreground px-2 italic";
        typing.innerText = "Bot sedang mengetik...";
        chatBox.appendChild(typing);
        chatBox.scrollTop = chatBox.scrollHeight;

        try {
            const res = await fetch("https://apifreellm.com/api/chat", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ message }),
            });

            const data = await res.json();
            typing.remove();

            if (data.status === "success") appendMessage(data.response, 'bot');
            else appendMessage(data.error || "Terjadi kesalahan dari server 😢", 'bot');
        } catch {
            typing.remove();
            appendMessage("Gagal menghubungi server. Coba lagi nanti ⚠️", 'bot');
        }
    }

    sendBtn.addEventListener('click', () => sendMessage());
    input.addEventListener('keydown', e => { if (e.key === 'Enter') sendMessage(); });
    quickReplies.forEach(btn => btn.addEventListener('click', () => sendMessage(btn.textContent.trim())));
});
</script>
@endsection
