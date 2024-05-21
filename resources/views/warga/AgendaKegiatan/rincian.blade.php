@extends('layouts.template')

@section('content')
<main class="w-full flex flex-col items-center py-10">
  <div class="w-5/6 bg-primary p-3 text-white rounded-t-xl border font-bold flex flex-row min-w-[490px]">
      <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('kegiatan/agenda') }}">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
              <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
          </svg>                                       
      </a>
      <p style="font-family: Inter" class="px-4">Rincian Agenda Kegiatan </p>
  </div>            
  <section class="w-5/6 flex flex-col items-center border-r border-l border-b min-w-[490px] rounded-b-xl">
    <div class="w-4/6 flex justify-center mt-5 mb-5"> 
      <h1 class="font-bold text-2xl justify-self-center" style="font-family: Poppins">Kerja Bakti Bersama Warga RW.01</h1>
    </div>
    <div class="w-4/6">
      <p class="" style="font-family: Asap">Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada :</p>
    </div>
    <div class="w-4/6 flex flex-row justify-center" style="font-family: Asap">
        <div class="grid grid-cols-[130px_30px_1fr] my-7">
          <p class="border-b-[1px] py-3">Hari</p><p class="border-b-[1px] py-3">:</p><p class="border-b-[1px] font-bold py-3">Minggu</p>
          <p class="border-b-[1px] py-3">Tanggal</p><p class="border-b-[1px] py-3">:</p><p class="border-b-[1px] font-bold py-3">10 Maret 2024</p>
          <p class="border-b-[1px] py-3">Jam</p><p class="border-b-[1px] py-3">:</p><p class="border-b-[1px] font-bold py-3">07:00 - 08:00 WIB</p>
          <p class="border-b-[1px] py-3">Lokasi</p><p class="border-b-[1px] py-3">:</p><p class="border-b-[1px] font-bold py-3">Jalan Raya Poros Lang-Lang 1</p>
        </div>
    </div>
  </section>
</main>
@endsection

@push('css')
@endpush

@push('js')
@endpush