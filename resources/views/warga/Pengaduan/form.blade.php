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
        <div class="flex flex-row justify-center bg-cover bg-center h-64 bg-desa-langlang bg-black/50 bg-blend-multiply">
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
                        <a class="font-bold px-7 text-walang" href="" style="font-family: Asap">BERANDA</a>
                        <a class="font-bold px-7" href="" style="font-family: Asap">MENU</a>
                        <a class="font-bold px-7" href="{{ url('logout') }}" style="font-family: Asap">LOGOUT</a>
                    </div>
                </nav>
                <header class="text-white/80">
                    <p class="font-light py-5" style="font-family: Asap">Beranda / Pengaduan / Formulir pengaduan</p>
                    <p class="text-white font-bold text-3xl">Pengaduan</p>
                </header>
            </div>
        </div>

        <main class="flex flex-col items-center py-10 min-w-fit">
            <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
                <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('/pengaduan/index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                      </svg>                                       
                </a>
                <p style="font-family: Inter" class="px-4">Form Pengaduan</p>
            </div>            
            <div class="w-4/6 flex flex-col items-start border-r border-l min-w-[490px] px-6">
                <form action="../submit_pengaduan" method="POST" class="w-full my-4" style="font-family: Asap">
                    <div class="mb-3">
                        <label for="nama">Nama <span class="text-red-500 text-lg">*</span></label>
                        <div class="mt-2 w-full">
                            <input id="nama" name="nama" type="text" placeholder="Masukkan nama anda" required class="w-full rounded-md border py-1 px-4 text-gray-900">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal">Tanggal</label>
                        <div class="mt-2 w-full">
                            <input id="tanggal" name="tanggal" type="date" onchange="updateDateNow()" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keluhan">Keluhan <span class="text-red-500 text-lg">*</span></label>
                        <div class="mt-2 w-full">
                            <textarea id="keluhan" name="keluhan" type="text" rows="3" placeholder="Masukkan keluhan anda" required class="w-full rounded-md border py-1 px-4 text-gray-900"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="bukti">Upload Bukti <span class="text-red-500 text-lg">*</span></label>
                        <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6 mt-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                              </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 10MB.</p>
                            <label for="upload-button" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                                Pilih Foto
                                <input type="file" id="upload-button" name="foto" style="display: none;">
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex flex-row justify-center border rounded-b-xl w-4/6" style="font-family: Asap">
                <button class="border rounded-lg w-full m-3 py-3">Batal</button>
                <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
        </main>

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
</body>
<script>
    function updateDateNow() {
      const today = new Date();
      const year = today.getFullYear();
      const month = String(today.getMonth() + 1).padStart(2, '0'); // Mengonversi ke format dua digit
      const day = String(today.getDate()).padStart(2, '0'); // Mengonversi ke format dua digit
  
      const formattedDate = `${year}-${month}-${day}`;
      document.getElementById('tanggal').value = formattedDate;
    }
  
    // Panggil fungsi saat halaman dimuat untuk mengatur tanggal hari ini sebagai nilai default
    updateDateNow();
  </script>
</html>