<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
      <h1>Selamat Datang di Website Saya</h1>
    <p>Ini adalah halaman beranda pertama menggunakan Blade.</p>
     <nav>
        <a href="/">Beranda</a> 
        <a href="/profil">Profil</a> 
        <a href="/kontak">Kontak</a>
    </nav>
</body>
</html> -->
<x-layout>

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Info</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Info yang terdaftar</p>
    </div>
    <h1 class="text-2xl font-bold text-white">Selamat Datang di Website Saya</h1>
    <p class="text-white">Ini adalah halaman beranda pertama menggunakan Blade.</p>
@endsection
</x-layout>