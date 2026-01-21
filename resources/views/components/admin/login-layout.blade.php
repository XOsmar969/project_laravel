<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Admin Dashboard' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


<body class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-700">
  {{-- <body class="antialiased bg-gray-50 dark:bg-gray-900"> --}}
  {{-- <x-admin.components.navbar /> --}}
  <main>
    {{ $slot }}
  </main>
</body>
</html>