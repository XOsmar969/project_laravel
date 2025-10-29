<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto border-collapse border border-gray-600 w-full text-center text-white">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border border-gray-600 px-4 py-2">No</th>
                    <th class="border border-gray-600 px-4 py-2">Nama</th>
                    <th class="border border-gray-600 px-4 py-2">grade</th>
                    <th class="border border-gray-600 px-4 py-2">email</th>
                    <th class="border border-gray-600 px-4 py-2">address</th>
                    <th class="border border-gray-600 px-4 py-2">date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->classroom->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->email }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->address }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
