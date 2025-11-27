<x-admin.layout>
    <div x-data="{ openDeleteModal: false, deleteUrl: '' }">
        <x-slot:judul>{{ $title }}</x-slot:judul>

     

        <section class="bg-white dark:bg-white-800 shadow-md sm:rounded-lg p-4">
            <div x-data="{ openAddModal: false }">
            <h1 class="text-xl font-bold mb-4">Data Student</h1>
                <x-admin.menu-table
                    button-label="Add Student"
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

                        @include('admin.student.create', ['classrooms' => $classrooms])
                    </div>
                </div>

            </div>

            {{-- Table Wrapper --}}
            <div class="mt-4 overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <thead class="bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Class</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Address</th>
                            <th class="px-4 py-3 text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($students as $student)
                        <tr class="border-t dark:border-gray-700">
                            <td class="px-4 py-3">{{ $students->firstItem() + $loop->index }}</td>
                            <td class="px-4 py-3">{{ $student->name }}</td>
                            <td class="px-4 py-3">{{ $student->classroom->name }}</td>
                            <td class="px-4 py-3">{{ $student->email }}</td>
                            <td class="px-4 py-3">{{ $student->address }}</td>

                            <td class="px-4 py-3 text-right">

                                @php
                                    $dropdownId = 'student-dropdown-' . $student->id;
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
                                            <a href="{{ route('admin.students.edit', $student->id) }}"
                                               class="text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                                               Edit
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <button
                                            @click="
                                                deleteUrl = '{{ route('admin.students.destroy', $student->id) }}';
                                                openDeleteModal = true;
                                            "
                                            class="block w-full text-left py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                            Delete
                                        </button>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="p-4">
                {{ $students->links() }}
            </div>

        </section>

        @include('admin.student.delete')

    </div>
</x-admin.layout>
