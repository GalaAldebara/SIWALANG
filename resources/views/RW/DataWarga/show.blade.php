@extends('layouts.template')

@section('content')
<main class="w-full h-full">
  <div class="flex flex-col items-center py-10 min-w-fit">
      <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 border-b-0 font-bold flex flex-row min-w-[490px]">
          <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('RW-DataWarga') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
          </a>
          <p style="font-family: Inter" class="px-4">Rincian Data Warga</p>
      </div>
      <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 border-t-0">
          <div class="w-full flex flex-row justify-center items-center gap-10 my-6 px-6">
            @if ($dataDiri)
                <img src="{{ asset('img/profil/' . $dataDiri->foto_profil) }}" alt="foto_profil" class="object-cover size-64">
            @else    
                <img src="../images/fotoProfil.jpeg" alt="foto_profil" class="object-cover size-64">
            @endif
            <div class="grid grid-cols-[130px_30px_1fr] divide-y-2">
            @if ($dataDiri)
                <span class="py-1">NIK</span><div class="py-1 border-t-transparent">:</div><span class="py-1 border-t-transparent">{{ $user->nik }}</span>
                <span class="py-1">Nama</span><div class="py-1">:</div><span class="py-1">{{ $user->nama }}</span>
                <span class="py-1">Tempat Lahir</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->tempat_lahir }}</span>
                <span class="py-1">Tanggal Lahir</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->tanggal_lahir }}</span>
                <span class="py-1">Jenis Kelamin</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->jenis_kelamin }}</span>
                <span class="py-1">Status Perkawinan</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->status_perkawinan }}</span>
                <span class="py-1">No. telp</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->no_telp }}</span>
                <span class="py-1">Status Kependudukan</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->status_kependudukan }}</span>
                <span class="py-1">Kewarganegaraan</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->kewarganegaraan }}</span>
                <span class="py-1">Pekerjaan</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->pekerjaan }}</span>
                <span class="py-1">Alamat Tinggal</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->alamat_tinggal }} RT.0{{ $dataDiri->rt }} RW.0{{ $dataDiri->rw }} {{ $dataDiri->kelurahan }} {{ $dataDiri->kecamatan }} {{ $dataDiri->kota }}</span>
                <span class="py-1">Alamat KTP</span><div class="py-1">:</div><span class="py-1">{{ $dataDiri->alamat_ktp }}</span>
                <span class="py-1">Status Hidup</span><div class="py-1">:</div><span class="py-1">{{ $user->status_hidup }}</span>
              @else
                <div>
                    data tidak ada
                </div>
              @endif
            </div>
          </div>
      </div>
  </div>
</main>
@endsection

@push('css')
@endpush

@push('js')
@endpush

