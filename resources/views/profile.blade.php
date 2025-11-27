<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
     <h1>Profil Saya</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Sekolah: {{ $sekolah }}</p>
</body>
</html> -->

<x-layout>
    <x-slot:judul>{{ $title}}</x-slot:judul>
    <p class="text-gray">Nama: {{ $nama }}</p>
    <p  class="text-gray">Kelas: {{ $kelas }}</p>
    <p  class="text-gray">Sekolah: {{ $sekolah }}</p>
</x-layout>