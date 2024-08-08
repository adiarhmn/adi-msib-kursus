@extends('MainLayout')

@section('content')
    <section>
        @include('components.message')
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-xl font-bold">Edit Kursus</h1>
            <div>
                <a href="{{ url('/kursus') }}" class="btn btn-sm btn-secondary">Kembali</a>
            </div>
        </div>

        <form action="{{ url('/kursus/' . ($kursus->id_kursus ?? '')) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-3">
                <label for="judul_kursus">Judul Kursus</label>
                <input value="{{ old('judul_kursus', $kursus?->judul_kursus) }}" name="judul_kursus" type="text"
                    placeholder="Judul" class="input input-sm input-bordered w-full max-w-sm" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="deskripsi_kursus">Deskripsi Kursus</label>
                <textarea name="deskripsi_kursus" class="textarea textarea-bordered max-w-sm" placeholder="Deskripsi">{{ old('deskripsi_kursus', $kursus?->deskripsi_kursus) }}</textarea>
            </div>
            <div class="flex flex-col mb-3">
                <label for="durasi_kursus">Durasi ( <i>Hari</i> )</label>
                <input value="{{ old('durasi_kursus', $kursus?->durasi_kursus) }}" name="durasi_kursus" type="number"
                    min="1" placeholder="Durasi" class="input input-sm input-bordered w-full max-w-sm" />
            </div>

            <div class="mt-10">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ url('/kursus') }}" class="btn btn-error btn-sm">Batal</a>
            </div>
        </form>
    </section>
@endsection
