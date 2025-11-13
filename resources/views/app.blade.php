<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <title>@yield('title', 'MindCare - Kesehatan Mentalmu Penting')</title>

  <!-- Tailwind CSS -->
  {{-- @vite('public/build/app-Lz3KVd0D.css') --}}
  {{-- <!-- @vite('resources/css/app.css') --> --}}
   {{-- <!-- @vite('public/build/assets/app-TBPMHXQo.css') --> --}}

  @vite(['resources/css/app.css', 'public/build/assets/app-CNeuPXDq.css'])

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
  @yield('content')
</body>
</html>