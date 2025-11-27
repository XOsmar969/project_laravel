
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
       

        <form action="{{ route('admin.guardian.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="name"
                    class="w-full rounded-lg border-gray-300 dark:bg-white-700 dark:border-gray-600" required>
            </div>

            <div>
                <label class="text-gray-900 dark:text-white">Pekerjaan</label>
                <input type="text" name="job"
                    class="w-full rounded-lg border-gray-300 dark:bg-white-700 dark:border-gray-600" required>
            </div>

            <div>
                <label class="text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email"
                    class="w-full rounded-lg border-gray-300 dark:bg-white-700 dark:border-gray-600" required>
            </div>

            <div>
                <label class="text-gray-900 dark:text-white">Alamat</label>
                <textarea name="address" rows="3"
                    class="w-full rounded-lg border-gray-300 dark:bg-white-700 dark:border-gray-600" required></textarea>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('admin.guardian.index') }}"
                   class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">
                    Kembali
                </a>

                <button type="submit"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>

