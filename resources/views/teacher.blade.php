<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto border-collapse border border-gray-600 w-full text-center text-white">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border border-gray-600 px-4 py-2">No</th>
                     <th class="border border-gray-600 px-4 py-2">Name</th>
                    <th class="border border-gray-600 px-4 py-2">Subjectname</th>
                    <th class="border border-gray-600 px-4 py-2">Phone</th>
                    <th class="border border-gray-600 px-4 py-2">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $loop->iteration }}</td>
                     <td class="border border-gray-600 px-4 py-2">{{ $teacher->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $teacher->subject->name }}</td>  
                    <td class="border border-gray-600 px-4 py-2">{{ $teacher->phone }}</td>        
                    <td class="border border-gray-600 px-4 py-2">{{ $teacher->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
