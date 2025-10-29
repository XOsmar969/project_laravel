<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto border-collapse border border-gray-600 w-full text-center text-white">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border border-gray-600 px-4 py-2">ID</th>
                    <th class="border border-gray-600 px-4 py-2">Nama Kelas</th>
                    <th class="border border-gray-600 px-4 py-2">Student List</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $classroom->id }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $classroom->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">
                        
                            @foreach ($classroom->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
