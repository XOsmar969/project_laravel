<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto border-collapse border border-gray-600 w-full text-center text-white">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border border-gray-600 px-4 py-2">No</th>
                    <th class="border border-gray-600 px-4 py-2">Nama</th>
                    <th class="border border-gray-600 px-4 py-2">job</th>
                    <th class="border border-gray-600 px-4 py-2">phone</th>
                    <th class="border border-gray-600 px-4 py-2">email</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($guardians as $guardian)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $guardian['name'] }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $guardian['job'] }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $guardian['phone'] }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $guardian['email'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
