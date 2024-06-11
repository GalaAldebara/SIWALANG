@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data_diri/form_satu') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Form Lengkapi Berkas Data Diri </p>
        </div>
        <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ route('store.form-dua') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full my-4 px-6" style="font-family: Asap">
                <div class="mb-6">
                    <div class="font-semibold">Kartu Tanda Penduduk (KTP) <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area">
                        <div class="flex flex-col items-center py-5" id="image-view" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 2MB.</p>
                        </div>
                        <label for="foto_ktp" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_ktp" style="display: none;" name="foto_ktp">
                        </label>
                        @error('foto_ktp')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-semibold">Kartu Keluarga (KK) <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area2">
                        <div class="flex flex-col items-center py-5" id="image-view2" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 2MB.</p>
                        </div>
                        <label for="foto_kk" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_kk" style="display: none;" name="foto_kk">
                        </label>
                        @error('foto_kk')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-semibold">Surat Nikah (Wajib jika sudah menikah) <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area3">
                        <div class="flex flex-col items-center py-5" id="image-view3" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 2MB.</p>
                        </div>
                        <label for="foto_surat_nikah" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_surat_nikah" style="display: none;" name="foto_surat_nikah">
                        </label>
                        @error('foto_surat_nikah')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-semibold">Foto Profil <span class="text-red-500 text-lg">*</span></div>
                    <div class="mt-2 w-full border-2 border-dashed rounded-lg flex flex-col items-center" style="font-family: Inter" id="drop-area4">
                        <div class="flex flex-col items-center py-5" id="image-view4" style="background-position: center ; background-size: cover;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>                              
                            <h1 class="font-medium">Pilih foto atau tarik kesini</h1>
                            <p class="text-gray-400">JPEG atau PNG maximal ukuran 2MB.</p>
                        </div>
                        <label for="foto_profil" class="border rounded-lg py-1 px-3 mt-3 mb-6">
                            Pilih Foto
                            <input type="file" accept="image/*" id="foto_profil" style="display: none;" name="foto_profil">
                        </label>
                        @error('foto_profil')
                        <small class="relative -top-4 text-red-500 text-xm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('data_diri/form_satu') }}"">Batal</a>
                <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
        </form>
    </main>
@endsection

@push('css')
@endpush

@push('js')
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
    setupDragAndDrop("drop-area2", "foto_kk", "image-view2");
    setupDragAndDrop("drop-area3", "foto_surat_nikah", "image-view3");
    setupDragAndDrop("drop-area4", "foto_profil", "image-view4");
</script>
@endpush
