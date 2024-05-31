@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('pelaporan-tamu') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
            </a>
            <p style="font-family: Inter" class="px-4">Rincian tamu </p>
        </div>            
        <section class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl">
          @empty($pelaporan)
            <div class="">
                <h5><i class="icon fas fa-ban"></i> Kesalahan</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
          @else
            <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
                <div class="grid grid-cols-[130px_30px_1fr] grid-rows-6 gap-y-2 my-7">
                  <p class="border-b-[1px]">Nama</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->nama_tamu }}</p>
                  <p class="border-b-[1px]">No. KTP</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->no_ktp_tamu }}</p>
                  <p class="border-b-[1px]">Jenis Kelamin</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->jenis_kelamin }}</p>
                  <p class="border-b-[1px]">Tanggal Bertamu</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->tanggal_bertamu }}</p>
                  <p class="border-b-[1px]">Alamat</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->alamat }}</p>
                  <p class="border-b-[1px]">Keterangan</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $pelaporan->keterangan_keperluan }}</p>
                  <p class="border-b-[1px]">Foto KTP</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold"><img src="{{ asset('img/pelaporan_tamu/' . $pelaporan->foto_ktp_tamu) }}" alt="" class="h-60"></p>
                </div>
            </div>
          @endempty
        </section>
    </main>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        function updateDateNow() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Mengonversi ke format dua digit
        const day = String(today.getDate()).padStart(2, '0'); // Mengonversi ke format dua digit
    
        const formattedDate = `${year}-${month}-${day}`;
        document.getElementById('tanggal_pengaduan').value = formattedDate;
        }
    
        // Panggil fungsi saat halaman dimuat untuk mengatur tanggal hari ini sebagai nilai default
        updateDateNow();
    </script>
@endpush