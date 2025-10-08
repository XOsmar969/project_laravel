<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto border-collapse border border-gray-600 w-full text-center text-white">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border border-gray-600 px-4 py-2">id</th>
                    <th class="border border-gray-600 px-4 py-2">Name</th>
                    <th class="border border-gray-600 px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $subject->id }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $subject->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $subject->description }}</td>
                    

                            @foreach ($subject->teachers as $teacher)
                                <li>{{ $teacher->name }}</li>
                            @endforeach
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
