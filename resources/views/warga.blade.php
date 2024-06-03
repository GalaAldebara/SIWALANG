<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap">
</head>
<body>
    <div class="h-screen">
        <div class="flex flex-row justify-center bg-cover bg-center bg-desa-langlang bg-black/50 bg-blend-multiply" style="height: 26rem">
            <div class="absolute w-5/6">
                <div class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4 mr-1">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    </p>Kec.Singosari, Kab.Malang, Jawa Timur<p>
                </div>
                <nav class="bg-white w-full rounded-lg flex felx-row justify-between min-w-max">
                    <div class="flex flex-row items-center pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center pr-8">
                        <button class="group font-bold px-7 text-walang transition-all duration-300 ease-in-out" id="beranda">
                            <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                BERANDA
                            </span>
                        </button>
                        <a class="group font-bold px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('warga') }}" >
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                NOTIFIKASI
                            </span>
                        </a>
                        <a class="group font-bold px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('logout') }}" >
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                LOGOUT
                            </span>
                        </a>
                    </div>
                </nav>
                <header class="text-white/80 flex flex-col items-center mt-7 text-center">
                    <h1 class="text-white font-bold text-5xl leading-tight" style="max-width: 550px">Selamat Datang di Desa Lang-Lang RW. 01 </h1>
                    <p class="font-light py-5" style="font-family: Asap">Portal pengelola kependudukan RW.001 Desa Lang-Lang</p>
                </header>
            </div>
        </div>

        <div class="relative -top-14 w-full">
            <div class="flex justify-center">
                <nav class="flex flex-row flex-wrap gap-9 justify-center items-center w-5/6 text-xl">
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="53" fill="#2a6c12" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267zm13 .566v5.734l-4.778-2.867zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083zM1 13.116V7.383l4.778 2.867L1 13.117Z"/>
                              </svg>
                            <p class="font-bold mb-2">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Pengajuan surat pengantar</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                              </svg>
                            <p class="font-bold mb-2">Pengajuan Bansos</p>
                            <p class="text-xs text-gray-500">Pengajuan penerima bantuan sosial</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('pelaporan-tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                              </svg>
                            <p class="font-bold mb-2">Pelaporan Tamu</p>
                            <p class="text-xs text-gray-500">Pelaporan adanya tamu dari luar desa yang menginap</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('pengaduan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="53" fill="#2a6c12" class="bi bi-person-exclamation" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                              </svg>
                            <p class="font-bold mb-2">Pengaduan</p>
                            <p class="text-xs text-gray-500">Pengaduan permasalahan yang terjadi di lingkungan warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('kegiatan/agenda') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="53" fill="#2a6c12" class="bi bi-activity" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2"/>
                              </svg>
                            <p class="font-bold mb-2">Jadwal Kegiatan</p>
                            <p class="text-xs text-gray-500">Agenda / Jadwal kegiatan warga mendatang</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('kegiatan/arsip') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-file-earmark-zip" viewBox="0 0 16 16">
                                <path d="M5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 8.438zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 8.438z"/>
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1h-2v1h-1v1h1v1h-1v1h1v1H6V5H5V4h1V3H5V2h1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                              </svg>
                            <p class="font-bold mb-2">Arsip Kegiatan</p>
                            <p class="text-xs text-gray-500">Arsip dokumentasi kegiatan warga bersama</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('data_diri') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            <p class="font-bold mb-2">Data diri</p>
                            <p class="text-xs text-gray-500">Informasi personal data kependudukan</p>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <footer>
            <div class="bg-secondary w-full flex flex-col items-center">
                <div class="w-4/6 text-white my-8">
                    <p class="underline underline-offset-[13px] decoration-[#2a6c12] font-bold">Tentang</p>
                    <p class="mt-5 text-xs text-white/60">SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang SIngosari Malang</p>
                </div>
            </div>
            <div class="w-full flex items-center flex-col bg-primary">
                <div class="w-5/6 flex-row flex justify-between py-2">
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
