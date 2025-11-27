<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
  <section class="bg-white dark:bg-white-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-white-800 dark:text-white-100 mb-6">Daftar Subject</h2>
        <table class="min-w-full border divide-y divide-white-200 dark:divide-gray-700">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($subject as $index => $name)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $name["name"] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $name["description"] }}</td>
                        <td class = "px-6 py-4">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>