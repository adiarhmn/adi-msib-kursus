@extends('MainLayout')

@section('content')
    <section>
        @include('components.message')
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-xl font-bold">Daftar Kursus</h1>
            <div>
                <a href="{{ url('/kursus/create') }}" class="btn btn-sm btn-secondary">Tambah</a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Judul Kursus</th>
                    <th>Durasi Kursus</th>
                    <th>Deskripsi Kursus</th>
                    <th>Materi / Detail</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($kursus as $key => $kursus)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $kursus->judul_kursus }}</td>
                            <td>{{ $kursus->durasi_kursus }} Hari</td>
                            <td>{{ $kursus->deskripsi_kursus }}</td>
                            <td>
                                <button class="btn btn-xs btn-primary w-full">Materi or Detail ></button>
                            </td>
                            <td>
                                <a href="{{url('/kursus/edit/'.$kursus->id_kursus)}}" class="btn btn-xs btn-accent">Edit</a>
                                <button class="btn btn-xs btn-error"
                                    onclick="my_modal_1{{ $key }}.showModal()">Hapus</button>
                            </td>
                        </tr>

                        {{-- Modal Konfrimasi Hapus --}}
                        <dialog id="my_modal_1{{ $key }}" class="modal">
                            <div class="modal-box">
                                <h3 class="text-lg font-bold">Konfirmasi Hapus</h3>
                                <p class="py-4">Yakin Hapus {{$kursus->judul_kursus}} ?</p>
                                <div class="modal-action">
                                    <form method="dialog">
                                        <button class="btn">Batal</button>
                                    </form>
                                    <form action="{{url('/kursus/'.$kursus->id_kursus)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-error">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
