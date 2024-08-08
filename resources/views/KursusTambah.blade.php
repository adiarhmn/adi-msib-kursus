@extends('MainLayout')

@section('content')
    <section>
        @include('components.message')
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-xl font-bold">Tambah Kursus</h1>
            <div>
                <a href="{{ url('/kursus') }}" class="btn btn-sm btn-secondary">Kembali</a>
            </div>
        </div>

        <form action="{{ url('/kursus') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-3">
                <label for="judul_kursus">Judul Kursus</label>
                <input name="judul_kursus" type="text" placeholder="Judul"
                    class="input input-sm input-bordered w-full max-w-sm" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="deskripsi_kursus">Deskripsi Kursus</label>
                <textarea name="deskripsi_kursus" class="textarea textarea-bordered max-w-sm" placeholder="Deskripsi"></textarea>
            </div>
            <div class="flex flex-col mb-3">
                <label for="durasi_kursus">Durasi ( <i>Hari</i> )</label>
                <input name="durasi_kursus" type="number" min="1" placeholder="Durasi"
                    class="input input-sm input-bordered w-full max-w-sm" />
            </div>

            <div class="mt-10">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ url('/kursus') }}" class="btn btn-error btn-sm">Batal</a>
            </div>
        </form>
    </section>
@endsection
