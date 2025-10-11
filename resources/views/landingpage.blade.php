@extends('app')

@section('title', 'MindCare')

@section('content')

    <!-- Header Dimulai -->
    <nav class="fixed top-0 left-0 right-0  z-50 bg-white/80 backdrop-blur-md border-b ">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 md:h-20">
            <h1 class="text-xl md:text-2xl font-bold bg-gradient-to-r to-accquent bg-clip-text">MindCare</h1>
            <div class="hidden md:flex items-center space-x-6">
                <a href="" class="text-foreground hover:text-primary transition-smooth font-medium">Beranda</a>
                <a href="" class="text-foreground hover:text-primary transition-smooth font-medium">Tentang</a>
                <a href="" class="text-foreground hover:text-primary transition-smooth font-medium">Fitur</a>
                <a href="" class="text-foreground hover:text-primary transition-smooth font-medium">Tujuan</a>
            </div>
            <div class="hidden md:flex items-center gap-4">
                <button href=""
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:text-accent-foreground h-10 px-4 py-2 hover:bg-primary/10">Login</button>
                <button href=""
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:text-accent-foreground h-10 px-4 py-2 hover:bg-primary/10">Mulai
                    Tes Sekarang</button>
            </div>
        </div>
    </nav>
    <!-- Akhir Header -->

    <!-- Awal Main Pertama -->
    <div class="min-h-screen flex items-center justify-center px-32 gap-12">
        <div class=" w-1/2 flex flex-col gap-8">
            <h1 class="font-bold text-7xl">Kesehatan Mentalmu Sama Pentingnya <span class="text-purple-400">Dengan Fisikmu</span></h1>
            <p class="">Bangun kesejahteraan mentalmu bersama MindCare. Temukan dukungan, edukasi, dan komunitas yang
                peduli pada
                kesehatan mental Anda.</p>
            <div class="">
                <button class="bg-purple-700 rounded-2xl px-5 py-4">Coba tes sekarang -></button>
                <button class="border border-black/10 px-5 py-4">Pelajari Lebih Lanjut</button>
            </div>
        </div>
        <div class="relative">
            <img src="https://mindcare-telkomuniversity.lovable.app/assets/hero-meditation-D4SggSSn.jpg" alt=""
                class="relative rounded-3xl shadow-medium w-[644px] h-auto">
        </div>
    </div>
    <!-- Akhir Main Pertama -->

    <!--  -->
    <div class="bg-purple-300 pt-20 pb-10">
        <div class="flex-col gap-8">
            <h1 class="font-bold text-7xl text-center">
                Tentang Mind Care
            </h1>
            <p class="text-center pt-6 text-1xl">
                Kami hadir untuk membantu masyarakat menjaga kesehatan mental melalui edukasi, komunitas, dan teknologi yang
                mudah diakses.
            </p>
        </div>
        <div class="flex px-10 pt-15 gap-7 ">
            <div class="bg-white rounded-2xl p-10 w-1/3">
                <div class="bg-green-100 inline-block p-4 mb-4 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-8 h-8 text-primary">
                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg></div>
                <h3 class="font-bold text-2xl">Empati dan dukungan</h3>
                <p>Kami memahami bahwa setiap perjalanan kesehatan mental adalah unik dan berharga</p>
            </div>
            <div class="bg-white rounded-2xl p-10 w-1/3">
                <div class="bg-green-100 inline-block p-4 mb-4 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div><h3 class="font-bold text-2xl">Komunitas Peduli</h3>
                <p>Terhubung dengan orang-orang yang saling mendukung dalam perjalanan mereka</p>
            </div>
            <div class="bg-white rounded-2xl p-10 w-1/3">
                <div class="bg-green-100 inline-block p-4 mb-4 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-8 h-8 text-primary"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path></svg>
                </div><h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
            </div>
        </div>
    </div>

    <div class="bg-white pt-20 pb-10">
        <div class="flex-col gap-8">
            <h1 class="font-bold text-7xl text-center">
                Fitur Unggulan
            </h1>
            <p class="text-center pt-6">
                Platform lengkap yang dirancang untuk mendukung perjalanan kesehatan mental Anda
            </p>
        </div>
        <div class="grid grid-cols-3 pt-15 gap-7 px-10">
            <div class="bg-green-100 rounded-2xl p-10 w-full">
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/icon-brain-BuIqC0CY.png" alt="">
                <h3 class="font-bold text-2xl">Empati dan dukungan</h3>
                <p>Kami memahami bahwa setiap perjalanan kesehatan mental adalah unik dan berharga</p>
            </div>
            <div class="bg-green-100 rounded-2xl p-10 w-full">
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/icon-chat-CjMIRV8r.png" alt="">
                <h3 class="font-bold text-2xl">Komunitas Peduli</h3>
                <p>Terhubung dengan orang-orang yang saling mendukung dalam perjalanan mereka</p>
            </div>
            <div class="bg-green-100 rounded-2xl p-10 w-full">
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/icon-education-C_fiPnyO.png" alt="">
                <h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
            </div>
            <div class="bg-green-100 rounded-2xl p-10 w-full">
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/icon-chatbot-CMn1PF9N.png" alt="">
                <h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
            </div>
            <div class="bg-green-100 rounded-2xl p-10 w-full">
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/icon-dashboard-DRAZnGGe.png" alt="">
                <h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
            </div>
        </div>
    </div>



        <div class="bg-purple-200 pt-20 pb-10">
            <div class="flex-col gap-8">
                <h1 class="font-bold text-7xl text-center">
                    Tujuan Kami
                </h1>
                <p class="text-center pt-6">
                    Platform lengkap yang dirancang untuk mendukung perjalanan kesehatan mental Anda
                </p>
            </div>
            <div class="grid grid-cols-2 pt-15 gap-7 px-10">
                <div class="bg-green-100 rounded-2xl p-10 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-7 h-7 text-primary"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    <h3 class="font-bold text-2xl">Empati dan dukungan</h3>
                    <p>Kami memahami bahwa setiap perjalanan kesehatan mental adalah unik dan berharga</p>
                </div>
                <div class="bg-green-100 rounded-2xl p-10 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-7 h-7 text-secondary"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                    <h3 class="font-bold text-2xl">Komunitas Peduli</h3>
                    <p>Terhubung dengan orang-orang yang saling mendukung dalam perjalanan mereka</p>
                </div>
                <div class="bg-green-100 rounded-2xl p-10 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-accent"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                    <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
                </div>
                <div class="bg-green-100 rounded-2xl p-10 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-7 h-7 text-primary"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                    <h3 class="font-bold text-2xl">Edukasi Berkelanjutan</h3>
                    <p>Akses ke informasi dan sumber daya yang membantu Anda tumbuh dan berkembang</p>
                </div>
            </div>
        </div>

    <div class="px-20">
        <div>
            <div>
                <h1>hallo semuanya ara ara</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, explicabo. Incidunt esse, dolore maiores libero omnis voluptate et eum dolorem explicabo? Adipisci, delectus reprehenderit. Provident ad obcaecati veniam porro suscipit!</p>
                <button></button> <p></p>
            </div>
            <div>
                <img src="https://mindcare-telkomuniversity.lovable.app/assets/thinking-person-k7Riv1mE.png" alt="">
            </div>
        </div>
    </div>
    @endsection
