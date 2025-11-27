
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="p-4">
        <h1 class="text-white font-bold mb-4">Tambah Subject</h1>

        <div class="bg-white p-4 rounded shadow">
            <form action="/admin/subject" method="POST">
                @csrf

                <!-- Nama Mapel -->
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">Nama Mapel</label>
                    <input type="text" name="name" class="border w-full p-2 rounded"
                        placeholder="Masukkan nama mata pelajaran" required>

                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">Deskripsi</label>
                    <textarea name="description" class="border w-full p-2 rounded" rows="4"
                        placeholder="Masukkan deskripsi mata pelajaran" required></textarea>

                    @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                <a href="/admin/subject" class="px-4 py-2 bg-gray-400 text-white rounded">Kembali</a>
            </form>
        </div>
    </div>

