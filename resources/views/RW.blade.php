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
                        <a class="group font-bold px-7 text-walang transition-all duration-300 ease-in-out" href="{{ url('RT') }}" >
                            <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                BERANDA
                            </span>
                        </a>
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
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ route('RW.DataWarga.index') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="53" fill="#2a6c12" class="bi bi-people-fill" viewBox="0 0 16 12">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                            <p class="font-bold pt-3">Data Warga</p>
                            <p class="text-xs text-gray-500 pt-4">Pengelola data warga</p>
                        </div>
                    </a>
                    {{-- <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-12 mt-1">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold pt-3">Data Tamu</p>
                            <p class="text-xs text-gray-500 pt-4">History tamu dari luar desa</p>
                        </div>
                    </a> --}}
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
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg"width="40" height="53" fill="#2a6c12" class="bi bi-person-lines-fill" viewBox="0 0 16 10">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                              </svg>
                            <p class="font-bold pt-3">Data Penerima Bansos</p>
                            <p class="text-xs text-gray-500 pt-2">Pengelola data warga yang berhak menerima bansos</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_tamu') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-calendar3" viewBox="0 0 16 12">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>
                            <p class="font-bold pt-3">Kegiatan</p>
                            <p class="text-xs text-gray-500 pt-2">Daftar riwayat kegiatan lingkungan warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('data_pengaduan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
                              </svg>
                            <p class="font-bold pt-2">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500 pt-3">Daftar riwayat pengajuan surat oleh warga</p>
                        </div>
                    </a>
                    <a class="rounded-md w-[250px] h-44" style="background-color:#f5f5f5" href="{{ url('RW-Keuangan') }}">
                        <div class="p-5 flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="53" fill="#2a6c12" class="bi bi-cash-coin" viewBox="0 0 16 12">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                              </svg>
                            <p class="font-bold pt-2">Keuangan</p>
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

            {{-- <div class="w-full flex flex-col items-center bg-black">
                <div class="flex justify-end w-4/6">
                    <p class="uppercase font-bold mr-3" style="font-family: Asap">Selengkapnya</p>
                    <button class="rounded-sm size-6 bg-primary px-3">0</button>
                </div>
                <div class="flex flex-row w-full items-center justify-center">
                    <div>wdwa</div>
                    <div class="grid grid-cols-3 mt-8 gap-7 w-4/6">
                        <div class="bg-people bg-center">
                            <div class="pt-64 min-w-80">Kepala Desa</div>
                            <div>Yulianto</div>
                        </div>
                        <div class="bg-people bg-center">
                            <div class="pt-64">Kepala Desa</div>
                            <div>Yulianto</div>
                        </div>
                        <div class="bg-people bg-center">
                            <div class="pt-64">Kepala Desa</div>
                            <div>Yulianto</div>
                        </div>
                    </div>
                    <div>ewqeqw</div>
                </div>
            </div> --}}
        </div>

        {{-- <main class="flex flex-col items-center py-10 min-w-fit">
            <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
                <button class="bg-white rounded-full size-7 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                      </svg>
                </button>
                <p style="font-family: Inter" class="px-4">Riwayat pengaduan</p>
            </div>
            <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px]">
                <div class="pb-6 mx-6">
                    <div class="w-full flex flex-row justify-between py-3">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="gray" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                                  </svg>
                            </span>
                            <input class="rounded-3xl pl-10 pr-14 py-2 w-full border border-gray-300" placeholder="Search">
                        </div>
                        <button class="bg-button text-white rounded-md px-2 py-1 my-1">+ Buat Pengaduan</button>
                    </div>
                    <table class="table-auto border-separate border border-gray-300">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300" style="font-family: Asap">TANGGAL PENGADUAN</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">KELUHAN</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">BUKTI</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="p-3 border border-gray-100">12/08/2024</td>
                                <td class="p-3 border border-gray-100">Sudah hampir satu minggu sampah belum diambil oleh petugas wwdawdawdawdwadwadawd awdwadwadwa</td>
                                <td class="p-3 border border-gray-100 underline underline-offset-3 cursor-pointer">bukti</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main> --}}

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
</body>
</html>
