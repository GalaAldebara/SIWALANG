@extends('layouts.template')

@section('content')
    <main class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data/kegiatan') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
            </a>
            <p style="font-family: Inter" class="px-4">Rincian Kegiatan </p>
        </div>            
        <section class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl">
          @empty($kegiatan)
            <div class="">
                <h5><i class="icon fas fa-ban"></i> Kesalahan</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
          @else
            <div class="flex flex-col justify-center border-t w-full" style="font-family: Asap">
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-lg py-5">{{ $kegiatan->nama_kegiatan }}</h1>
                    <div class="w-5/6">
                        <p>{{ $kegiatan->deskripsi_kegiatan }}</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="grid grid-cols-[130px_30px_1fr] gap-y-2 my-7">
                      <p class="border-b-[1px]">Nama</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $kegiatan->hari }}</p>
                      <p class="border-b-[1px]">No. KTP</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $kegiatan->tanggal_kegiatan }}</p>
                      <p class="border-b-[1px]">Jenis Kelamin</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $kegiatan->jam_mulai }} - {{ $kegiatan->jam_selesai }} WIB</p>
                      <p class="border-b-[1px]">Tanggal Bertamu</p><p class="border-b-[1px]">:</p><p class="border-b-[1px] font-bold">{{ $kegiatan->lokasi }}</p>
                    </div>
                </div>
            </div>
          @endempty
        </section>
    </main>
@endsection

@push('css')
@endpush

@push('js')
@endpush
