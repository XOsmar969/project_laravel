<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-xl font-semibold mb-4">Edit Teacher</h2>

        <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <label>Nama</label>
            <input type="text" name="name" value="{{ $teacher->name }}"
                   class="w-full border p-2 rounded mb-3" required>

            {{-- Subject --}}
            <label>Mata Pelajaran</label>
            <select name="subject_id" class="w-full border p-2 rounded mb-3" required>
                @foreach(\App\Models\Subject::all() as $subject)
                    <option value="{{ $subject->id }}"
                        {{ $subject->id == $teacher->subject_id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
            @error('subject_id')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror

            {{-- Phone --}}
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $teacher->phone }}"
                   class="w-full border p-2 rounded mb-3" required>

            {{-- Email --}}
            <label>Email</label>
            <input type="text" name="email" value="{{ $teacher->email }}"
                   class="w-full border p-2 rounded mb-3">

            {{-- Address --}}
            <label>Alamat</label>
            <textarea name="address"
                      class="w-full border p-2 rounded mb-3">{{ $teacher->address }}</textarea>

            <div class="flex justify-between mt-3">
                <a href="{{ route('admin.teacher.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded">
                    Kembali
                </a>

                <button class="px-4 py-2 bg-yellow-600 text-white rounded">
                    Update
                </button>
            </div>
        </form>

    </div>

</x-admin.layout>
