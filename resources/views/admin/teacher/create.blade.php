<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6">

        <h2 class="text-lg font-semibold mb-4">Tambah Teacher</h2>

        <form action="{{ route('admin.teacher.store') }}" method="POST">
            @csrf

            {{-- NAME --}}
            <div class="mb-3">
                <label class="block text-gray-700">Teacher Name</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            {{-- PHONE --}}
            <div class="mb-3">
                <label class="block text-gray-700">Phone</label>
                <input type="text" name="phone" class="w-full border p-2 rounded" required>
            </div>

            {{-- ADDRESS --}}
            <div class="mb-3">
                <label class="block text-gray-700">Address</label>
                <textarea name="address" class="w-full border p-2 rounded" required></textarea>
            </div>

            {{-- SUBJECT SELECT --}}
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold">Subject</label>
                <select name="subject_id" class="w-full border p-2 rounded" required>
                    <option value="">-- pilih subject --</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
                @error('subject_id')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}   </div>
                @enderror
            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-between mt-5">
                <a href="{{ route('admin.teacher.index') }}"
                    class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded">
                    Back
                </a>

                <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
