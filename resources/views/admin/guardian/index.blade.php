<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-4">

        <h1 class="text-xl font-bold mb-4">Data Guardians</h1>

        {{-- Tombol tambah --}}
        <a href="/admin/guardian/create"
           class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded">
            Tambah Data 
        </a>

        <div class="bg-white p-4 rounded shadow overflow-x-auto">

            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">No</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama </th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Alamat</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">

                    @foreach ($guardians as $guardian)
                        <tr>
                            <td class="px-4 py-2 text-sm">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->name }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->job }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->email }}</td>
                            <td class="px-4 py-2 text-sm">{{ $guardian->address }}</td>
                        </tr>
                    @endforeach

                    @if ($guardians->isEmpty())
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                                Tidak ada data wali
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>

        </div>

    </div>
</x-admin.layout>
