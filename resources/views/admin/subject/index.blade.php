<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">Data Subjects</h1>
            <a href="/admin/subject/create" class="px-4 py-2 bg-blue-600 text-white rounded-md">Tambah Subject</a>
        </div>

        @if(session('success'))
            <div class="p-3 mb-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white p-4 rounded shadow">
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">Guru</th>
                        <th class="border p-2">Mapel</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                        <td class="border p-2">
                            @foreach($subject->teachers as $teacher)
                                {{ $teacher->name }}<br>
                            @endforeach
                        <td class="border p-2">{{ $subject->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin.layout>
