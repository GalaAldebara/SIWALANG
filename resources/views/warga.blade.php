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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Pengajuan surat pengantar</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('pengajuan_bansos') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Pengajuan Bansos</p>
                            <p class="text-xs text-gray-500">Pengajuan penerima bantuan sosial</p> 
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('pelaporan-tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Pelaporan Tamu</p>
                            <p class="text-xs text-gray-500">Pelaporan adanya tamu dari luar desa yang menginap</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('pengaduan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Pengaduan</p>
                            <p class="text-xs text-gray-500">Pengaduan permasalahan yang terjadi di lingkungan warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('kegiatan/agenda') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Jadwal Kegiatan</p>
                            <p class="text-xs text-gray-500">Agenda / Jadwal kegiatan warga mendatang</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('kegiatan/arsip') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Arsip Kegiatan</p>
                            <p class="text-xs text-gray-500">Arsip dokumentasi kegiatan warga bersama</p>
                        </div>
                    </a>
                    <a class="rounded-md w-60 h-40" style="background-color:#f5f5f5" href="{{ url('data_diri') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mb-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold mb-2">Data diri</p>
                            <p class="text-xs text-gray-500">Informasi personal data kependudukan</p>
                        </div>
                    </a>
                </nav>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <div class="w-4/6 p-5 flex flex-row">
                <div>
                    <h6 class="text-primary italic font-bold" style="font-family: Asap">Sejarah singkat</h6>
                    <h1 class="text-3xl font-bold underline underline-offset-[14px] decoration-[#2a6c12]    ">Tentang Desa Lang-Lang</h1>
                    <p class="mt-5 text-gray-400" style="font-family: Asap">Berasal dari kata 'Alang-Alang' atau 'Ilalang', nama desa ini terbentuk. Berawal dari hamparan tanah yang memiliki banyak rumput liar, ilalang dan alang-alang inilah, terbentuk salah satu dari 17 Desa yang berada di Kecamatan Singosari Kabupaten Malang. Desa Langlang terbagi menjadi 4 pedusunan dan 4 RW dan 48 RT. Desa Langlang terletak di 112,4 BT dan 7,52 LU dan berada pada ketinggian 466 mdpl. Luas wilayah Desa Langlang ± 498.398 ha.</p>
                </div>
                <div>
                    <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-96 max-w-96 pr-3 py-2">
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center py-3">
            <div class="w-5/6 grid grid-cols-4 bg-primary text-center text-white rounded-xl">
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">999</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Laki-laki</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">999</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Perempuan</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">999</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">keluarga</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">999</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Penduduk</p>
                </div>
            </div>
        </div>

        <div class="w-full mt-3 flex flex-col justify-center items-center pb-14" style="background-color:#f5f5f5">
            <h6 class="text-center pt-8 text-primary font-bold text-lg">Pemimpin</h6>
            <h1 class="text-center font-bold text-3xl">Struktur Kepemimpinan RW 01 beserta RT</h1>

            <div class="grid grid-cols-[200px_minmax(0,1fr)_minmax(0,1fr)_minmax(0,1fr)_minmax(0,1fr)_200px] grid-rows-[minmax(0,1fr)_400px] justify-center gap-5 w-full pt-3">
                <div class="col-span-5 flex flex-row justify-end">
                    <p class="uppercase font-bold mr-3" style="font-family: Asap">Selengkapnya</p>
                    <button class="rounded-md h-6 w-8 bg-primary flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>                          
                    </button>
                </div>
                <div class="col-start-1 flex justify-end items-center">
                    <button class="size-14 bg-primary rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 mr-1">
                            <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                          </svg>                          
                    </button>
                </div>
                <div class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Kepala Desa</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </div>
                <div class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Kepala Desa</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </div>
                <div class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Kepala Desa</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </div>
                <div class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Kepala Desa</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </div>
                <div class="flex justify-start items-center">
                    <button class="size-14 bg-primary rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 ml-1">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>                          
                    </button>
                </div>
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