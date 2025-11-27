<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <div class="p-4">
        
         <section class="bg-white dark:bg-white-800 shadow-md sm:rounded-lg p-4">
            <div x-data="{ openAddModal: false }">
            <h1 class="text-xl font-bold mb-4">Data Subject</h1>
                <x-admin.menu-table
                    button-label="Add Subject"
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
                        @include('admin.subject.create')
                    </div>
                </div>
            </div>

        <div class="bg-white p-4 rounded shadow">
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-100">
                        
                        <th class="border p-2">Mapel</th>
                        <th class="border p-2">Deskripsi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                      
                        <td class="border p-2">{{ $subject->name }}</td>
                        <td class="border p-2">{{ $subject->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin.layout>
