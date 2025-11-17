<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-4">
        <h1 class="text-xl font-bold mb-4">Tambah Subject</h1>
    <div class="bg-white p-4 rounded shadow">
        <form action="/admin/subject" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Nama Subject</label>
                <input type="text" name="name" class="border w-full p-2 rounded"
                       placeholder="Masukkan nama mata pelajaran" required>
                       

                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

             <div class="mb-4">
                <label class="block mb-2 font-semibold">Guru</label>
                <input type="text" name="name" class="border w-full p-2 rounded"
                       placeholder="Masukkan nama guru" required>
                       

                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
            <a href="/admin/subject" class="px-4 py-2 bg-gray-400 text-white rounded">Kembali</a>
        </form>
    </div>
</div>
</x-admin.layout>
