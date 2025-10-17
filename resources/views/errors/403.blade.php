@extends('app')

@section('title', 'Akses Ditolak')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen text-center">
    <h1 class="text-6xl font-bold text-red-500 mb-4">403</h1>
    <p class="text-xl mb-6">Kamu tidak memiliki izin untuk mengakses halaman ini.</p>
    <a href="{{ url('/') }}" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary/80">
        Kembali ke Beranda
    </a>
</div>
@endsection
