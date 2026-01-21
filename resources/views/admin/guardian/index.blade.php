<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <section class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">

            <div x-data="{ openAddModal: false }" class="flex flex-col gap-4">

                {{-- Header --}}
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
                        Data Guardian
                    </h1>

                    <x-admin.menu-table
                        button-label="Add Guardians"
                        on-click="openAddModal = true"
                        class="bg-blue-600 hover:bg-blue-700 text-white"
                    />
                </div>

                {{-- Modal Add --}}
                <div x-show="openAddModal"
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

                    <div class="relative w-full max-w-2xl bg-white dark:bg-gray-800 rounded-lg shadow">
                        <button
                            @click="openAddModal = false"
                            class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            ✕
                        </button>

                        <div class="p-6">
                            @include('admin.guardian.create')
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Nama</th>
                                <th class="px-6 py-3">Pekerjaan</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">Alamat</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($guardians as $guardian)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">

                                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        {{ $guardian->name }}
                                    </td>
                                    <td class="px-6 py-4">{{ $guardian->job }}</td>
                                    <td class="px-6 py-4">{{ $guardian->email }}</td>
                                    <td class="px-6 py-4">{{ $guardian->address }}</td>

                                    <td class="px-6 py-4 text-center">

                                        @php
                                            $dropdownId = 'guardian-dropdown-' . $guardian->id;
                                            $buttonId = $dropdownId . '-button';
                                        @endphp

                                        <button
                                            id="{{ $buttonId }}"
                                            data-dropdown-toggle="{{ $dropdownId }}"
                                            class="inline-flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>

                                        <div id="{{ $dropdownId }}"
                                            class="hidden z-20 w-44 bg-white dark:bg-gray-700 rounded-lg shadow">

                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a href="{{ route('admin.guardian.edit', $guardian->id) }}"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="py-1 border-t border-gray-100 dark:border-gray-600">
                                                <form
                                                    action="{{ route('admin.guardian.destroy', $guardian->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="block w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                        Tidak ada data wali
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
