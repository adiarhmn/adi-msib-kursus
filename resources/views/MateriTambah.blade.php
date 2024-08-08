@extends('MainLayout')

@section('content')
    <section>
        @include('components.message')
        <div class="flex justify-between items-center mb-3">
            <div>
                <h1 class="text-xl font-bold">Tambah Materi</h1>
                <div class="text-xs -mt-1 text-slate-500">Pada Kursus {{ $kursus?->judul_kursus }}</div>
            </div>
            <div>
                <a href="{{ url('/kursus/detail/' . $id_kursus) }}" class="btn btn-sm btn-secondary">Kembali</a>
            </div>
        </div>

        <form action="{{ url('/materi') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $id_kursus }}" name="id_kursus">
            <div class="flex flex-col mb-3">
                <label for="judul_materi_kursus">Judul Materi</label>
                <input value="{{ old('judul_materi_kursus') }}" name="judul_materi_kursus" type="text"
                    placeholder="Judul" class="input input-sm input-bordered w-full max-w-sm" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="deskripsi_materi_kursus">Deskripsi Materi</label>
                <textarea name="deskripsi_materi_kursus" class="textarea textarea-bordered max-w-sm" placeholder="Deskripsi Materi">{{old('deskripsi_materi_kursus')}}</textarea>
            </div>
            <div class="flex flex-col mb-3">
                <label for="link_materi_kursus">Link Materi</label>
                <input value="{{old('link_materi_kursus')}}" name="link_materi_kursus" type="text" placeholder="Link"
                    class="input input-sm input-bordered w-full max-w-sm" />
            </div>

            <div class="mt-10">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ url('/kursus/detail/' . $id_kursus) }}" class="btn btn-error btn-sm">Batal</a>
            </div>
        </form>
    </section>
@endsection
