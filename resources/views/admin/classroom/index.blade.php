<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <section class="bg-white dark:bg-white-800 rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-white-800 dark:text-white-100">Data Classroom</h2>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b bg-white-100 dark:bg-white-700">
                    <th class="py-2 px-4">No</th>
                    <th class="py-2 px-4">Grade</th>
                    <th class="py-2 px-4">Student List</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $index => $classroom)
                    <tr class="border-b hover:bg-white-50 dark:hover:bg-white-800">
                       <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $classroom->name }}</td>
                        <td class="py-2 px-4">
                            @foreach ($classroom->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-admin.layout>
