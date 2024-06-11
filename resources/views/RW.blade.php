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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-1">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    <a href="https://maps.app.goo.gl/8FUyPuXjaErjHRZp9" target="_blank" class="hover:underline text-xs md:text-sm lg:text-base">
                        Kec. Singosari, Kab. Malang, Jawa Timur
                    </a>
                </div>
                <nav class="bg-white w-full rounded-lg flex flex-col md:flex-row justify-between items-center min-w-max px-4">
                    <div class="flex flex-row items-center pl-2 md:pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center py-2 md:py-0">
                        <button class="group font-bold px-3 md:px-7 text-walang transition-all duration-300 ease-in-out" id="beranda">
                            <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                BERANDA
                            </span>
                        </button>
                        <a class="group font-bold px-3 md:px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('warga') }}">
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                NOTIFIKASI
                            </span>
                        </a>
                        <a class="group font-bold px-3 md:px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('logout') }}">
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                LOGOUT
                            </span>
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
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ route('RW.DataWarga.index') }}">
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
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_penerima_bansos') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="#2a6c12" class="bi bi-person-lines-fill" viewBox="0 0 16 10">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                              </svg>
                            <p class="font-bold pt-3 text-sm md:text-base">Data Penerima Bansos</p>
                            <p class="text-xs text-gray-500 pt-2 hidden md:block">Pengelola data warga yang berhak menerima bansos</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('kegiatan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="#2a6c12" class="bi bi-calendar3" viewBox="0 0 16 12">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>
                            <p class="font-bold pt-3 text-sm md:text-base">Kegiatan</p>
                            <p class="text-xs text-gray-500 pt-2 hidden md:block">Daftar riwayat kegiatan lingkungan warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('show-pdf') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="#2a6c12" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
                              </svg>
                            <p class="font-bold pt-2 text-sm md:text-base">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500 pt-3 hidden md:block">Daftar riwayat pengajuan surat oleh warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[150px] md:w-[250px] h-32 md:h-44 bg-gray-100" href="{{ url('RW-Keuangan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="#2a6c12" class="bi bi-cash-coin" viewBox="0 0 16 12">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c.369-.085.569-.26.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                              </svg>
                            <p class="font-bold pt-2 text-sm md:text-base">Keuangan</p>
                            <p class="text-xs text-gray-500 pt-3 hidden md:block">Pengaduan permasalahan yang terjadi di lingkungan warga</p>
                        </div>
                    </a>
                </nav>
            </div>
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
