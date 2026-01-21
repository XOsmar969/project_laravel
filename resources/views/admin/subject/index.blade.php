<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <section class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">

            <div x-data="{ openAddModal: false }" class="flex flex-col gap-4">

                {{-- Header --}}
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
                        Data Subject
                    </h1>

                    <x-admin.menu-table
                        button-label="Add Subject"
                        on-click="openAddModal = true"
                        class="bg-blue-600 hover:bg-blue-700 text-white"
                    />
                </div>

                {{-- Modal Add --}}
                <div
                    x-show="openAddModal"
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

                    <div class="relative w-full max-w-2xl bg-white dark:bg-gray-800 rounded-lg shadow">
                        <button
                            @click="openAddModal = false"
                            class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            ✕
                        </button>

                        <div class="p-6">
                            @include('admin.subject.create')
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                        <thead
                            class="text-xs uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                            <tr>
                                <th class="px-6 py-3">Mapel</th>
                                <th class="px-6 py-3">Deskripsi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($subjects as $subject)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700
                                           hover:bg-gray-50 dark:hover:bg-gray-700">

                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        {{ $subject->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $subject->description }}
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2"
                                        class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                        Tidak ada data subject
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </section>

    </div>
</x-admin.layout>
