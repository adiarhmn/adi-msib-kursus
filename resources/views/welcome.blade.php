@extends('MainLayout')

@section('content')
    <section style="min-height: 70vh" class="flex items-center">
        <div class="h-full">
            <h1>Selamat Datang,</h1>
            <h1 class="text-4xl font-bold">Adi Aulia Rahman</h1>

            {{-- Tombol Lihat Kursus --}}
            <a href="{{url('/kursus')}}" class="btn btn-sm btn-primary mt-10">Lihat Kursus ></a>

        </div>
    </section>
@endsection
