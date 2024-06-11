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
