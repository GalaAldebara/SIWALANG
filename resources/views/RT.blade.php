<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap">
</head>
<body>
    <div class="min-h-screen">
        <div class="relative flex flex-col md:flex-row justify-center bg-cover bg-center bg-desa-langlang bg-black/50 bg-blend-multiply" style="height: 26rem">
            <div class="absolute w-full px-4 md:w-5/6">
                <div class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4 mr-1">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    <a href="https://maps.app.goo.gl/8FUyPuXjaErjHRZp9" target="_blank" class="hover:underline">
                        Kec. Singosari, Kab. Malang, Jawa Timur
                    </a>
                </div>
                <nav class="bg-white w-full rounded-lg flex flex-col md:flex-row justify-between items-center min-w-max px-4">
                    <div class="flex flex-row items-center pl-2 md:pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center py-2 md:py-0 space-x-2 md:space-x-5">
                        <button class="group font-bold px-2 md:px-3 text-walang transition-all duration-300 ease-in-out" id="beranda">
                            <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                BERANDA
                            </span>
                        </button>
                        <a class="group font-bold px-2 md:px-3 text-black transition-all duration-300 ease-in-out" href="{{ url('rt_notifikasi') }}">
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                NOTIFIKASI
                            </span>
                        </a>
                        <a class="relative group font-bold px-2 md:px-3 text-black transition-all duration-300 ease-in-out" href="{{ url('logout') }}">
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                LOGOUT
                            </span>
                            <div class="flex justify-end items-center absolute -top-2 -left-7 md:-top-1 md:-left-5 lg:-top-2 lg:-left-7 bg-yellow-400 px-1 py-0.5 md:px-1.5 md:py-1 rounded-xl" style="font-size: 10px; font-family: Asap">
                                @if($notificationCount > 99)
                                    <span class="hidden md:inline-block">99</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2">
                                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                @else
                                    <span>{{$notificationCount}}</span>
                                @endif
                            </div>
                        </a>
                    </div>
                </nav>

                <header class="text-white/80 flex flex-col items-center mt-7 text-center px-4">
                    <h1 class="text-white font-bold text-3xl md:text-5xl leading-tight" style="max-width: 550px">Selamat Datang di Desa Lang-Lang RW. 01 </h1>
                </header>
            </div>
        </div>

        <div class="relative -top-14 w-full">
            <div class="flex justify-center">
                <nav class="flex flex-row flex-wrap gap-5 md:gap-9 justify-center items-center w-full md:w-3/6 text-xl px-4">
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('data_warga') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="43" fill="#2a6c12" class="bi bi-people-fill" viewBox="0 0 16 12">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                            <p class="font-bold pt-3 text-sm md:text-base">Data Warga</p>
                            <p class="text-xs text-gray-500 pt-4 hidden md:block">Pengelola data warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('data_tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="43" fill="#2a6c12" class="bi bi-person-vcard" viewBox="0 0 16 12">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                              </svg>
                            <p class="font-bold pt-3 text-sm md:text-base">Data Tamu</p>
                            <p class="text-xs text-gray-500 pt-4 hidden md:block">History tamu dari luar desa</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('penerima_bansos') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="#2a6c12" class="bi bi-person-lines-fill" viewBox="0 0 16 10">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                              </svg>
                            <p class="font-bold pt-3 text-sm md:text-base">Data Penerima Bansos</p>
                            <p class="text-xs text-gray-500 pt-2 hidden md:block">Pengelola data warga yang berhak menerima bansos</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('data_pengaduan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="53" fill="#2a6c12" class="bi bi-person-exclamation" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                              </svg>
                            <p class="font-bold pt-2 text-sm md:text-base">Pengaduan</p>
                            <p class="text-xs text-gray-500 pt-3 hidden md:block">Pengaduan permasalahan yang terjadi di lingkungan warga</p>
                        </div>
                    </a>

                </nav>
            </div>
        </div>

        <footer>
            <div class="bg-secondary w-full flex flex-col items-center">
                <div class="w-full md:w-4/6 text-white my-8 px-4 md:px-0">
                    <p class="underline underline-offset-[13px] decoration-[#2a6c12] font-bold">Tentang</p>
                    <p class="mt-5 text-xs text-white/60">SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang Singosari Malang</p>
                </div>
            </div>
            <div class="w-full flex items-center flex-col bg-primary">
                <div class="w-full md:w-5/6 flex-row flex justify-between py-2 px-4 md:px-0">
                    <p class="text-white/60 text-xs">SIWALANG 2024</p>
                    <p class="text-white/60 text-xs cursor-pointer">Kembali ke atas</p>
                </div>
            </div>
        </footer>
    </div>
    <script>
        var level_id = {{ $level_id }};
        var beranda = document.getElementById('beranda');

        beranda.addEventListener('click', function (event) {
            event.preventDefault();

            var url = '';

            if (level_id === 1) {
                url = '/admin';
            } else if (level_id === 2) {
                url = '/RW';
            } else if (level_id === 3) {
                url = '/RT';
            } else if (level_id === 4) {
                url = '/warga';
            }

            window.location.href = url;
        });
    </script>
</body>
</html>
