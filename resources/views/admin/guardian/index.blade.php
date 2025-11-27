<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

     <div class="bg-white p-6 rounded-lg shadow">
        
         <section class="bg-white dark:bg-white-800 shadow-md sm:rounded-lg p-4">
            <div x-data="{ openAddModal: false }">
            <h1 class="text-xl font-bold mb-4">Data Guardian</h1>
                <x-admin.menu-table
                    button-label="Add Guardians"
                    on-click="openAddModal = true"
                />

                {{-- Modal Add --}}
                <div x-show="openAddModal"
                    x-transition
                    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
                        <button
                            @click="openAddModal = false"
                            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
                            ✕
                        </button>
                        @include('admin.guardian.create')
                    </div>
                </div>
            </div>

        <div class="bg-white p-4 rounded shadow overflow-x-auto">

            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">No</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Alamat</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">

                    @forelse ($guardians as $guardian)
                        <tr>
                            <td class="px-4 py-2 text-sm">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->name }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->job }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->email }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->address }}</td>

                            <td class="px-4 py-2 text-sm flex gap-2">

                                @php
                                    $dropdownId = 'guardian-dropdown-' . $guardian->id;
                                    $buttonId = $dropdownId . '-button';
                                @endphp

                                <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}"
                                    class="inline-flex items-center p-1 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    </svg>
                                </button>

                               <div id="{{ $dropdownId }}"
                                    class="hidden z-10 w-44 bg-white rounded shadow dark:bg-gray-700">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a href="{{ route('admin.guardian.edit', $guardian->id) }}"
                                               class="text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                                               Edit
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                      <form action="{{ route('admin.guardian.destroy', $guardian->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                         class="block w-full text-left py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                          Delete
    
                                        </button>

                                    </form>

                                    </div>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                                Tidak ada data wali
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>
</x-admin.layout>
