<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <section class="bg-white dark:bg-white-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-white-800 dark:text-white-100 mb-6">Daftar Classroom</h2>
        <table class="min-w-full border divide-y divide-white-200 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-white-700">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Kelas</th>
                    <th class="px-6 py-3 text-left">Student List</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classroom as $classroom)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $classroom->name }}</td>
                        <td class="px-6 py-4">
                            @foreach ($classroom->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            Belum ada data classroom.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</x-layout>
