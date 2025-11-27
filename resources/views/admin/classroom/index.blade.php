<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="bg-white p-6 rounded-lg shadow">
        
         <section class="bg-white dark:bg-white-800 shadow-md sm:rounded-lg p-4">
            <div x-data="{ openAddModal: false }">
            <h1 class="text-xl font-bold mb-4">Data Classroom</h1>
                <x-admin.menu-table
                    button-label="Add Classroom"
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
                        @include('admin.classroom.create')
                    </div>
                </div>
            </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 border">
                <thead class="bg-gray-100 text-gray-900 border-b">
                    <tr>
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Grade</th>
                        <th class="p-3 border">Student List</th>
                       
                    </tr>
                </thead>

                <tbody>

                    @forelse ($classrooms as $index => $classroom)
                        <tr class="border-b align-top">
                            <td class="p-3 border">{{ $index + 1 }}</td>

                            <td class="p-3 border font-semibold">
                                {{ $classroom->name }}
                            </td>

                            <td class="p-3 border">
                                <ul class="list-disc pl-5">
                                    @forelse ($classroom->students as $student)
                                        <li>{{ $student->name }}</li>
                                    @empty
                                        <p class="text-gray-500 italic">Belum ada siswa</p>
                                    @endforelse
                                </ul>
                            </td>

                           
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-500">
                                Tidak ada data classroom.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

</x-admin.layout>
