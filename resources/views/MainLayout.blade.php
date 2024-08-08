<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kursus Online</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    <div class="container mx-auto bg-base-200">
        <header>
            <div class="navbar bg-base-100 shadow-lg">
                <div class="navbar-start">
                    <div class="dropdown">
                        {{-- BTN Hamberger Icon --}}
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </div>

                        {{-- Dropdown Menu --}}
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li><a class="active" href="{{url('/kursus')}}">Kursus</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-center">
                    <a class="btn btn-ghost text-xl">Kursus Online Ardi</a>
                </div>
                <div class="navbar-end">

                    {{-- BTN Search Icon --}}
                    <button class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    {{-- BTN Bell Icon --}}
                    <button class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                    </button>
                </div>
            </div>
        </header>

        {{-- Content Page Kursus --}}
        <main class="px-10 min-h-screen py-5">
            @yield('content')
        </main>
        <footer class="flex items-center justify-center">
            {{-- Copyright --}}
            <p>&copy; Adi Aulia Rahman 2021</p>
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
