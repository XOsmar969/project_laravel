<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>


<div class="container mt-4">

    <h3>{{ $title }}</h3>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/admin/guardian" method="POST">
                @csrf

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label">Nama Wali</label>
                    <input type="text" name="name" 
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Pekerjaan --}}
                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="job" 
                           class="form-control @error('job') is-invalid @enderror"
                           value="{{ old('job') }}">

                    @error('job')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" 
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}">

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="address" rows="3"
                              class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>

                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin/guardian" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>
</div>
</x-admin.layout>
