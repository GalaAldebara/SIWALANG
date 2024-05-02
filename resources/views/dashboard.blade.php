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
                    </p>Kec.Singosari, Kab.Malang, Jawa Timur<p>
                </div>
                <nav class="bg-white w-full rounded-lg flex felx-row justify-between min-w-max">
                    <div class="flex flex-row items-center pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center pr-8">
                        <a class="font-bold px-7 text-primary" href="" style="font-family: Asap">BERANDA</a>
                        <a class="font-bold px-7" href="" style="font-family: Asap">MENU</a>
                        <a class="font-bold px-7" href="" style="font-family: Asap">LOGOUT</a>
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
                <nav class="flex flex-row flex-wrap gap-5 justify-center items-center w-5/6">
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p> 
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                    <button class="rounded-md" style="background-color:#f5f5f5">
                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="w-full h-9 mb-2">
                                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <p class="font-bold">Pengajuan Surat</p>
                            <p class="text-xs text-gray-500">Surat pengantar dan surat keterangan lainnya</p>
                        </div>
                    </button>
                </nav>
            </div>
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

        {{-- <footer>
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
        </footer> --}}

    </div>
</body>
</html>