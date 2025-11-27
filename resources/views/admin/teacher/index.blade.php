<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

  
    <div class="flex justify-between items-center mb-4 mt-2">
        <h2 class="text-xl font-semibold">Data Teacher</h2>

        <a href="{{ route('admin.teacher.create') }}"
           class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Tambah Data
        </a>
    </div>

    {{-- TABLE --}}
    <div class="max-w-8xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3">NO</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Subject Name</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Address</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($teachers as $user)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->subject->name }}</td>
                        <td class="px-6 py-4">{{ $user->phone }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->address }}</td>
                       <td class="px-4 py-2 text-sm flex gap-2">

                                @php
                                    $dropdownId = 'teacher-dropdown-' . $user->id;
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
                                            <a href="{{ route('admin.teacher.edit', $user->id) }}"
                                               class="text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                                               Edit
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                      <form action="{{ route('admin.teacher.destroy', $user->id) }}" method="POST"
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
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
