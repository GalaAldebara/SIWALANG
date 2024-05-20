@extends('layouts.template')

@section('content')
<main class="w-full h-full">
  <div class="flex flex-col items-center py-10 min-w-fit">
      <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 border-b-0 font-bold flex flex-row min-w-[490px]">
          <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('warga') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
          </a>
          <p style="font-family: Inter" class="px-4">Riwayat pengaduan</p>
      </div>              
      <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 border-t-0 px-6">
          <div class="w-full flex flex-row justify-center gap-10 mt-4">
            <img src="../images/fotoProfil.jpeg" alt="" class="object-cover size-60">
            <div class="grid grid-cols-[130px_30px_1fr] divide-y-2">
              <span class="py-1">Nama</span><div class="py-1 border-t-transparent">:</div><span class="py-1 border-t-transparent">Sudiono</span>
              <span class="py-1">NIK</span><div class="py-1">:</div><span class="py-1">696969696969</span>
              <span class="py-1">Status Perkawinan</span><div class="py-1">:</div><span class="py-1">Belum Menikah</span>
              <span class="py-1">No. telp</span><div class="py-1">:</div><span class="py-1">085345827321</span>
              <span class="py-1">Status Kependudukan</span><div class="py-1">:</div><span class="py-1">Warga Asli Setempat</span>
              <span class="py-1">Alamat KTP</span><div class="py-1">:</div><span class="py-1">Lang-Lang 1 No.1, RT 04, RW 01, Lang-Lang, Singosari, Malang</span>
              <span class="py-1">Alamat Tinggal</span><div class="py-1">:</div><span class="py-1">Lang-Lang 1 No.1, RT 04, RW 01, Lang-Lang, Singosari, Malang</span>
            </div>
          </div>
          <div class="w-full flex flex-row justify-end items-center gap-3 text-white py-6">
            <a class="bg-primary p-3 rounded-lg" href="{{ url('data_diri/form_satu') }}">Ubah Data Diri</a>
            <a class="bg-primary p-3 rounded-lg" href="{{ url('data_diri/form_password') }}">Ubah Password Akun</a>
          </div>
      </div>
  </div>
</main>
@endsection

@push('css')
@endpush

@push('js')
@endpush