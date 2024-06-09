@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('RW-Keuangan') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Form Keuangan </p>
        </div>
        <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ url('RW-Keuangan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full my-4 px-6" style="font-family: Asap">
                {{-- Tambahkan kolom NIK --}}
                <div class="mb-3">
                    <label for="nik">NIK<span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="nik" name="nik" type="text" value="{{ old('nik', auth()->user()->nik) }}" readonly class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('nik')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                {{-- <input type="hidden" name="nik" value="{{ old('nik', auth()->user()->nik) }}"> --}}
                <div class="mb-3">
                    <label for="tanggal_kegiatan">Tanggal</label>
                    <div class="mt-2 w-full">
                        <input id="tanggal_kegiatan" name="tanggal_kegiatan" type="date" readonly class="w-full rounded-md border py-1 px-4 text-gray-900">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kategori">Kategori Keuangan<span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <select name="kategori" id="kategori" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="Pemasukan">Pemasukan</option>
                            <option value="Pengeluaran">Pengeluaran</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan<span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="keterangan" name="keterangan" type="text" placeholder="Masukkan Keterangan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('keterangan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jumlah">Jumlah<span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input id="jumlah" name="jumlah" type="number" placeholder="Masukkan jumlah" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('jumlah')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('RW-Keuangan') }}">Batal</a>
                <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
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
            document.getElementById('tanggal_kegiatan').value = formattedDate;
            }

            updateDateNow();
    </script>
@endpush
