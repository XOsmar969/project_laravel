<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow mt-4">

        <h1 class="text-xl font-semibold mb-4">Edit Guardian</h1>

        <form action="{{ route('admin.guardian.update', $guardian->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="font-semibold">Nama Guardian</label>
                <input type="text" name="name"
                       value="{{ old('name', $guardian->name) }}"
                       class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-3">
                <label class="font-semibold">Pekerjaan</label>
                <input type="text" name="job"
                       value="{{ old('job', $guardian->job) }}"
                       class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-3">
                <label class="font-semibold">Alamat</label>
                <textarea name="address" class="w-full border p-2 rounded">{{ old('address', $guardian->address) }}</textarea>
            </div>

          

            <div class="flex justify-between mt-4">
                <a href="{{ route('admin.guardian.index') }}"
                   class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded">Kembali</a>

                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                    Update
                </button>
            </div>

        </form>
    </div>

</x-admin.layout>
