<x-admin.layout>
    <x-slot:judul>{{ $title ?? 'Dashboard Admin' }}</x-slot:judul>

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-black-800 dark:text-black-100">Dashboard Admin</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">
            {{ now()->format('l, d F Y') }}
        </p>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 text-blue-600 rounded-lg">
                    <i class="fa-solid fa-user-graduate text-xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Students</h2>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">40</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 text-yellow-600 rounded-lg">
                    <i class="fa-solid fa-school text-xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Classrooms</h2>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">4</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 text-purple-600 rounded-lg">
                    <i class="fa-solid fa-book text-xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Subjects</h2>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">5</p>
                </div>
            </div>
        </div>

         <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 text-red-600 rounded-lg">
                    <i class="fa-solid fa-school text-xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Guardian</h2>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">10</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 text-gray-600 rounded-lg">
                    <i class="fa-solid fa-school text-xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Teacher</h2>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">5</p>
                </div>
            </div>
        </div>

    </div>
</x-admin.layout>
