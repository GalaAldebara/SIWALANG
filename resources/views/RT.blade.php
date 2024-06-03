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
                <nav class="flex flex-row flex-wrap gap-9 justify-center items-center w-4/6 text-xl">
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_warga') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="53" fill="#2a6c12" class="bi bi-people-fill" viewBox="0 0 16 12">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                            <p class="font-bold pt-3">Data Warga</p>
                            <p class="text-xs text-gray-500 pt-4">Pengelola data warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="53" fill="#2a6c12" class="bi bi-person-vcard" viewBox="0 0 16 12">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                              </svg>
                            <p class="font-bold pt-3">Data Tamu</p>
                            <p class="text-xs text-gray-500 pt-4">History tamu dari luar desa</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('penerima_bansos') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                              </svg>
                            <p class="font-bold pt-3">Data Penerima Bansos</p>
                            <p class="text-xs text-gray-500 pt-2">Pengelola data warga yang berhak menerima bansos</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_pengaduan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mt-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold pt-2">Pengaduan</p>
                            <p class="text-xs text-gray-500 pt-3">Pengaduan permasalahan yang terjadi di lingkungan warga</p>
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
                <a href="{{ route('struktur.kepemimpinan') }}" class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Kepala Desa</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </a>
                <a href="{{ route('struktur.rt') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>RT</h1>
                        <p class="text-xl font-bold">
                            @php
                                $rtUser = DB::table('m_user')
                                          ->where('level_id', 2) // Sesuaikan dengan level_id RT
                                          ->first();
                                if ($rtUser) {
                                    echo $rtUser->nama;
                                } else {
                                    echo 'Nama RT Tidak Tersedia';
                                }
                            @endphp
                        </p>
                    </div>
                </a>
                <a href="{{ route('struktur.rw') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>RW</h1>
                        <p class="text-xl font-bold">
                            @php
                                $rtUser = DB::table('m_user')
                                          ->where('level_id', 3) // Sesuaikan dengan level_id RT
                                          ->first();
                                if ($rtUser) {
                                    echo $rtUser->nama;
                                } else {
                                    echo 'Nama RT Tidak Tersedia';
                                }
                            @endphp
                        </p>
                    </div>
                </a>
                <a href="{{ route('struktur.rt') }}" class="bg-people bg-center bg-cover flex flex-col justify-end rounded-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>Sekretaris</h1>
                        <p class="text-xl font-bold">Yulianto</p>
                    </div>
                </a>
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
