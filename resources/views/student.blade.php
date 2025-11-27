<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
  <section class="bg-white dark:bg-white-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-white-800 dark:text-white-100 mb-6">Daftar Student</h2>
        <table class="min-w-full border divide-y divide-white-200 dark:divide-gray-700">
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-5">
        <div class="overflow-x-auto"> 
            <table class="min-w-full table-auto divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-48">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-64">Address</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-32">Grade</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($students as $index => $user)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 break-all">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 break-words">{{ $user->address }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->classroom->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
