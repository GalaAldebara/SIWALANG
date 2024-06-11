@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data_warga') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Form Data Warga </p>
        </div>
        <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl" action="{{ url('data_warga') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full my-4 px-6" style="font-family: Asap">
                <div class="mb-3">
                    <label for="nama">Nama<span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="nama" name="nama" type="text" placeholder="Masukkan nama" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('nama')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nik">NIK <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="nik" name="nik" type="number" placeholder="Masukkan NIK" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('nik')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <!-- Input hidden -->
                <input id="password" name="password" type="hidden" value="">
                <input id="level_id" name="level_id" type="hidden">
            </div>
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('data_warga') }}">Batal</a>
                <button id="submitButton" type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
        </form>
    </main>
@endsection

@push('css')
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Menangani pengiriman formulir
        document.getElementById('submitButton').addEventListener('click', function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir

            // Ambil nilai NIK dari input
            var nik = document.getElementById('nik').value;
            var level = '4';

            // Setel nilai username dan password
            document.getElementById('password').value = nik;
            document.getElementById('level_id').value = level;

            // Submit formulir
            document.querySelector('form').submit();
        });
    });
</script>
@endpush
