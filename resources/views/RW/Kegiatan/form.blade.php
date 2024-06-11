@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data/kegiatan') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
            </a>
            <p style="font-family: Inter" class="px-4">Form Kegiatan</p>
        </div>            
        <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ url('data/kegiatan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full my-4 px-6" style="font-family: Asap">
                <div class="mb-3">
                    <label for="nama_kegiatan">Nama Kegiatan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input type="text" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('nama_kegiatan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal_kegiatan">Tanggal Kegiatan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('tanggal_kegiatan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="hari">Hari <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <input type="text" id="hari" name="hari" placeholder="Masukan Hari" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('hari')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi_kegiatan">Deskripsi Kegiatan <span class="text-red-500 text-lg">*</span></label>
                    <div class="mt-2 w-full">
                        <textarea rows="3" id="deskripsi_kegiatan" name="deskripsi_kegiatan" placeholder="Masukkan Agenda Kegiatan" class="w-full rounded-md border py-1 px-4 text-gray-900"></textarea>
                        @error('deskripsi_kegiatan')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 flex gap-3">
                    <div class="w-full">
                        <label for="jam_mulai">Jam Mulai <span class="text-red-500 text-lg">*</span></label>
                        <div class="mt-2 w-full">
                            <input type="time" id="jam_mulai" name="jam_mulai" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            @error('jam_mulai')
                            <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="jam_selesai">Jam Selesai <span class="text-red-500 text-lg">*</span></label>
                        <div class="mt-2 w-full">
                            <input type="time" id="jam_selesai" name="jam_selesai" class="w-full rounded-md border py-1 px-4 text-gray-900">
                            @error('jam_selesai')
                            <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lokasi">Lokasi </label>
                    <div class="mt-2 w-full">
                        <input type="text" id="lokasi" name="lokasi" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        @error('lokasi')
                        <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('data/kegiatan') }}"">Batal</a>
                <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Kirim</button>
            </div>
        </form>
    </main>
@endsection

@push('css')
@endpush

@push('js')
<script>
    $(document).ready(function(){
        $('#tanggal_kegiatan').on('change', function() {
            var tanggalInput = $(this).val();
            var hariInput = $('#hari');

            // console.log("Tanggal input:", tanggalInput);

            if (tanggalInput) {
                var tanggal = new Date(tanggalInput);
                console.log("Tanggal objek:", tanggal); // Debugging log
                var options = { weekday: 'long' };
                var hari = tanggal.toLocaleDateString('id-ID', options);
                console.log("Nama hari:", hari); // Debugging log

                hariInput.val(hari);
            }
        });
    });
</script>
@endpush