@extends('MainLayout')

@section('content')
    <section>
        @include('components.message')
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-xl font-bold">Detail Kursus dan Materi</h1>
        </div>
        <div class="overflow-x-auto">
            <table class="w-1/2">
                <tbody>
                    <tr>
                        <td>Judul Kursus</td>
                        <td>: {{ $kursus?->judul_kursus }}</td>
                    </tr>
                    <tr>
                        <td>Durasi Kursus</td>
                        <td>: {{ $kursus?->durasi_kursus }} Hari</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Kursus</td>
                        <td>: {{ $kursus?->deskripsi_kursus }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between items-center mb-3 mt-10">
            <h1 class="text-xl font-bold">Daftar Materi Kursus Ini</h1>
            <div>
                <a href="{{ url('/materi/create/' . $kursus?->id_kursus) }}" class="btn btn-sm btn-secondary">Tambah</a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Judul Materi</th>
                    <th>Deskripsi Materi</th>
                    <th class="w-80">Link Materi</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($kursus?->materi as $key => $materi)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $materi?->judul_materi_kursus }}</td>
                            <td>{{ $materi?->deskripsi_materi_kursus }}</td>
                            <td class="flex justify-center flex-col gap-2 w-80">
                                <iframe
                                    src="{{ $materi->link_materi_kursus ?? 'https://bpbd.meranginkab.go.id/upload/publikasi/E-Book_ReactJS_Bahasa_Indonesia.pdf' }}"
                                    class="w-full" height="280"></iframe>
                                <a href="{{ $materi?->link_materi_kursus }}" target="_blank"
                                    class="btn btn-xs btn-primary">Link</a>
                            </td>
                            <td>
                                <a href="{{ url('/materi/edit/' . $materi?->id_materi_kursus) }}"
                                    class="btn btn-xs btn-accent">Edit</a>
                                <button class="btn btn-xs btn-error"
                                    onclick="my_modal_1{{ $key }}.showModal()">Hapus</button>

                                {{-- Modal Konfrimasi Hapus --}}
                                <dialog id="my_modal_1{{ $key }}" class="modal">
                                    <div class="modal-box">
                                        <h3 class="text-lg font-bold">Konfirmasi Hapus</h3>
                                        <p class="py-4">Yakin Hapus {{ $materi?->judul_materi_kursus }} ?</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn">Batal</button>
                                            </form>
                                            <form action="{{ url('/materi/' . $materi?->id_materi_kursus) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-error">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
