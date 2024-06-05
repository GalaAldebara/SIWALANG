@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('pengajuan_bansos') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
            </a>
            <p style="font-family: Inter" class="px-4">Form Pengajuan Bansos </p>
        </div>            
        <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ url('pengajuan_bansos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full my-4 px-6" style="font-family: Asap">
                <div class="mb-6">
                    <label for="nik" class="font-semibold">NIK</label>
                    <div class="mt-2 w-full">
                        <input id="nik" name="nik" type="text" value="{{ Auth::user()->nik }}" readonly class="w-full bg-gray-200 rounded-md border py-1 px-4 text-gray-900">
                        @error('nik')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="no_kk" class="font-semibold">no. KK <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="no_kk" name="no_kk" type="text" placeholder="Masukkan No. KK" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('no_kk')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="jumlah_keluarga" class="font-semibold">Jumlah anggota keluarga <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="jumlah_keluarga" name="jumlah_keluarga" type="number" placeholder="Masukkan No. KK" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('jumlah_keluarga')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="jumlah_tanggungan" class="font-semibold">Jumlah orang yang ditanggung <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih jumlah orang yang ditanggung</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">lebih dari 3</option>
                        </select>
                        @error('jumlah_tanggungan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="status_rumah" class="font-semibold">status kepemilikan rumah <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="status_rumah" name="status_rumah" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih status kepemilikan rumah</option>
                            <option value="1">milik sendiri</option>
                            <option value="2">sewa</option>
                        </select>
                        @error('status_rumah')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="luas_rumah" class="font-semibold">Luas rumah <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="luas_rumah" name="luas_rumah" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih luas rumah</option>
                            <option value="5">kurang dari 25m</option>
                            <option value="4">antara 25m sampai 40m</option>
                            <option value="3">antara 40m sampai 60m</option>
                            <option value="2">antara 60m sampai 80m</option>
                            <option value="1">lebih dari 80m</option>
                        </select>
                        @error('luas_rumah')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="alas_rumah" class="font-semibold">Alas rumah <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="alas_rumah" name="alas_rumah" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih alas rumah</option>
                            <option value="1">ubin</option>
                            <option value="2">kayu</option>
                            <option value="3">semen</option>
                            <option value="4">tanah</option>
                        </select>
                        @error('alas_rumah')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="dinding_rumah" class="font-semibold">Dinding rumah <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="dinding_rumah" name="dinding_rumah" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih dinding rumah</option>
                            <option value="1">bata</option>
                            <option value="2">kayu</option>
                            <option value="3">bambu</option>
                        </select>
                        @error('dinding_rumah')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="fasilitas_wc" class="font-semibold">Fasilitas WC <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="fasilitas_wc" name="fasilitas_wc" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih fasilitas WC</option>
                            <option value="1">pribadi</option>
                            <option value="2">umum</option>
                        </select>
                        @error('fasilitas_wc')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="besaran_listrik" class="font-semibold">Besaran daya listrik (VA) <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="besaran_listrik" name="besaran_listrik" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih besaran daya listrik</option>
                            <option value="1">lebih dari 900</option>
                            <option value="2">900</option>
                            <option value="3">450</option>
                            <option value="4">0</option>
                        </select>
                        @error('besaran_listrik')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="jumlah_kendaraan" class="font-semibold">Jumlah Kendaraan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="jumlah_kendaraan" name="jumlah_kendaraan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih jumlah kendaraan</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">lebih dari 3</option>
                        </select>
                        @error('jumlah_kendaraan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="pendapatan" class="font-semibold">Pendapatan per bulan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="pendapatan" name="pendapatan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih pendapatan per bulan</option>
                            <option value="1">lebih dari 1.500.000</option>
                            <option value="2">antara 1.000.000 sampai 1.500.000</option>
                            <option value="3">antara 500.000 sampai 1.000.000</option>
                            <option value="4">kurang dari 500</option>
                        </select>
                        @error('pendapatan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="pekerjaan" class="font-semibold">Pekerjaan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select id="pekerjaan" name="pekerjaan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected style="color: gray;">Pilih pekerjaan</option>
                            <option value="1">swasta</option>
                            <option value="2">wirausaha</option>
                            <option value="3">petani</option>
                            <option value="4">buruh</option>
                            <option value="5">tidak bekerja</option>
                        </select>
                        @error('pekerjaan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-semibold">Slip Gaji <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area">
                        <div class="flex flex-col items-center py-5" id="image-view" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 10MB.</p>
                        </div>
                        <label for="foto_ktp" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_ktp" style="display: none;" name="foto_gaji">
                        </label>
                        @error('foto_gaji')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-semibold">Surat Keterangan Tidak Mampu (SKTM) <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area2">
                        <div class="flex flex-col items-center py-5" id="image-view2" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 10MB.</p>
                        </div>
                        <label for="foto_sktm" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_sktm" style="display: none;" name="foto_sktm">
                        </label>
                        @error('foto_sktm')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('pengajuan_bansos') }}"">Batal</a>
                <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
            <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" hidden>
           
        </form>
    </main>
@endsection

@push('css')
@endpush

@push('js')
    <script>
            function updateDateNow() {
            const today = new Date();
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0')
        
            const formattedDate = `${year}-${month}-${day}`;
            document.getElementById('tanggal_pengajuan').value = formattedDate;
            }
            
            updateDateNow();
    </script>
    <script>
        function setupDragAndDrop(dropAreaId, inputFileId, imageViewId) {
        const dropArea = document.getElementById(dropAreaId);
        const inputFile = document.getElementById(inputFileId);
        const imageView = document.getElementById(imageViewId);
        
        inputFile.addEventListener("change", () => uploadImage(inputFile, imageView));
        dropArea.addEventListener("dragover", (e) => e.preventDefault());
        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            inputFile.files = e.dataTransfer.files;
            uploadImage(inputFile, imageView);
        });
    }

    function uploadImage(inputFile, imageView) {
        let imgLink = URL.createObjectURL(inputFile.files[0]);
        imageView.style.backgroundImage = `url(${imgLink})`;
        imageView.classList.add('w-2/6', 'h-48');
        imageView.textContent = "";
    }

    setupDragAndDrop("drop-area", "foto_ktp", "image-view");
    setupDragAndDrop("drop-area2", "foto_sktm", "image-view2");

        </script>
@endpush