<x-admin.layout>

    <div class="p-6 bg-white rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4">Edit Student</h2>

        <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-medium">Nama</label>
                <input type="text" name="name" value="{{ $student->name }}"
                       class="w-full border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block font-medium">Email</label>
                <input type="email" name="email" value="{{ $student->email }}"
                       class="w-full border-gray-300 rounded-lg">
            </div>

            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                Update
            </button>
        </form>
    </div>

</x-admin.layout>
