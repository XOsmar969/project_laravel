<div>
    <h2 class="text-white font-semibold mb-4">Tambah Classroom</h2>

    <form action="{{ route('admin.classroom.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="text-white font-semibold mb-1">Nama Kelas</label>
            <input type="text" name="name"
                   class="w-full border p-2 rounded"
                   required>

            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end mt-4 gap-2">
            <button type="button"
                @click="openAddModal = false"
                class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg">
                Kembali
            </button>

            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Simpan
            </button>
        </div>
    </form>
</div>
